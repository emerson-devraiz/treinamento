<?php

// Cabecalho da resposta
header("Content-type: application/json; charset=utf-8");
header("Access-Control-Allow-Headers: Content-Type, Authorization");
header("Access-Control-Allow-Methods: POST");
header("Access-Control-Allow-Origin: *");

//ini_set('display_errors', 1);
//ini_set('display_startup_erros', 1);
//error_reporting(E_ALL);

require('../../vendor/autoload.php');

use app\Jwt;
use app\Debug;

$objDebug = new Debug();
$objDebug->__setDebug('N');
$objDebug->__setEndereco('../../public/log/');
$objDebug->__setNomeArquivo('login');

$objDebug->__setConteudo('### Login ###');
$objDebug->QuebraLinha(2);

# Pega todos os headers da requisição que o cliente enviou
$headers = apache_request_headers();

# Pega o metodo de acesso
$metodo = $_SERVER["REQUEST_METHOD"];

if ($metodo === 'POST')
{
	$retorno['erro'] = 'N';
	
	if (!isset($headers['Content-Type']))
	{
		$retorno['erro'] = 'S';
		$retorno['msg']	 = 'Cabeçalho Content-Type não enviado!';
	}
	else if ($headers['Content-Type'] !== 'application/json')
	{
		$retorno['erro'] = 'S';
		$retorno['msg']	 = 'Cabeçalho Content-Type inválido! Cabeçalho aceito: application/json';
	}
	else if (!isset($headers['Authorization']))
	{
		$retorno['erro'] = 'S';
		$retorno['msg']	 = 'Cabeçalho Authorization não enviado!';
	}
	else
	{
		# String json com todos os parâmetros
		$strJson  = file_get_contents('php://input');
        $objDebug->__setConteudo('$strJson = '.$strJson);

        # Converte a strJson para objeto
        $objParam = json_decode($strJson);

        # Variáveis
        $email = $objParam->email;
        $senha = $objParam->senha;

        $objDebug->__setConteudo('$email = '.$email);
        $objDebug->__setConteudo('$senha = '.$senha); 
        $objDebug->QuebraLinha(2);    

        # Remove o Bearer do cabeçalho Authorization para pegar somente o token
        $token = str_replace("Bearer ", "", $headers['Authorization']);
        $objDebug->__setConteudo('$token = '.$token);

        $objDebug->__setConteudo('$token = '.Jwt::tokenIsValid($email, $token));

        # Valida o token enviado pelo cliente
        if (!Jwt::tokenIsValid($email, $token))
        {
            $retorno['erro'] = 'S';
	        $retorno['msg']	 = utf8_encode('Não autorizado! Token inválido.');
        } 
        else 
        {

        }

    }

}
else
{
	$retorno['erro'] = 'S';
	$retorno['msg']	 = utf8_encode('Método de requisição inválido!');
}

$objDebug->ConcluiDebug();

echo json_encode($retorno);




?>