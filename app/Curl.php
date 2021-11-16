<?php

namespace app;

use app\Debug;

class Curl
{
	public $curl;
	
	protected $url			  = NULL;
	protected $timeOut		  = 30;
	protected $returnTransfer = true;
	protected $header_		  = true; // Obs. Palavra reservada
	protected $headers		  = array('Content-Type: application/json');
	protected $customRequest  = NULL;
	protected $postFields	  = NULL;
	protected $objDebug;
	
	public function __construct()
    {
        $this->objDebug = new Debug();
		$this->objDebug->__setDebug('N');
        $this->objDebug->__setEndereco('log/');
        $this->objDebug->__setNomeArquivo('curl');
    }

    public function setUrl(string $url) : void
	{
        $this->url = $url;
    }

    public function setHeader(string $header) : void
	{
        $this->objDebug->__setConteudo('token = '.$header);
		$this->objDebug->QuebraLinha(1);

        $this->headers[] = $header;
    }

    public function setPostFields(string $postFields) : void
	{
        $this->postFields = $postFields;
    }
	
	private function curlIniciar() : void
	{
		# Inicia um novo CURL para a requisição
		$this->curl = curl_init();
		
		if (!empty($this->url)) 		   { curl_setopt($this->curl, CURLOPT_URL, 			  $this->url);			  }
		if (!empty($this->timeOut)) 	   { curl_setopt($this->curl, CURLOPT_TIMEOUT, 		  $this->timeOut); 		  }
		if (!empty($this->returnTransfer)) { curl_setopt($this->curl, CURLOPT_RETURNTRANSFER, $this->returnTransfer); }
		if (!empty($this->header_)) 	   { curl_setopt($this->curl, CURLOPT_HEADER, 		  $this->header_); 		  }
		if (!empty($this->headers)) 	   { curl_setopt($this->curl, CURLOPT_HTTPHEADER, 	  $this->headers); 		  }
		if (!empty($this->customRequest))  { curl_setopt($this->curl, CURLOPT_CUSTOMREQUEST,  $this->customRequest);  }
		if (!empty($this->postFields))	   { curl_setopt($this->curl, CURLOPT_POSTFIELDS,     $this->postFields);	  }

        $this->objDebug->__setConteudo('url = '.$this->url);
		$this->objDebug->QuebraLinha(1);
		
		$this->objDebug->__setConteudo('postFields = '.$this->postFields);
		$this->objDebug->QuebraLinha(2);
	}
	
	public function post() : string
	{
		# Ativa o POST do CURL
		$this->customRequest = 'POST';
		
		return $this->executar();
	}
	
	protected function curlGet() : string
	{
		# Ativa o GET do CURL
		$this->customRequest = 'GET';		
		
		return $this->curlExecutar();
	}
	
	protected function curlPut() : string
	{
		# Ativa o GET do CURL
		$this->customRequest = 'PUT';		
		
		return $this->curlExecutar();
	}
	
	private function executar() : string
	{
		$tentativa = 5;

		while ($tentativa > 0)
		{
			# Inicializa o CURL setando todas as variáveis
			$this->curlIniciar();
			
			$resultado = curl_exec($this->curl);
			$erro 	   = curl_error($this->curl);

            $this->objDebug->__setConteudo('$resultado = '.$resultado);
			$this->objDebug->QuebraLinha(5);
			
			$this->objDebug->ConcluiDebug();
			
			if ($erro)
			{
				$erro = array('erro' => $erro);

				return json_encode($erro);
			}
			else
			{
				# Pega o código de retorno do servidor 200/503
				$http_code = curl_getinfo($this->curl, CURLINFO_HTTP_CODE);

				# Pega o tamanho total de todos os cabeçalhos recebidos
				$header_size = curl_getinfo($this->curl, CURLINFO_HEADER_SIZE);

				# Remove todo o cabeçalho recebido e pega apenas o JSON retornado
				$jsonResultado = substr($resultado, $header_size);

				curl_close($this->curl);		
			}

			$tentativa = ($http_code == 503) ? --$tentativa : 0;
		}
		
		# Volta os valores padrões das variáveis para evitar erros
		$this->limpaVariaveis();
		
		return $jsonResultado;
	}
	
	private function limpaVariaveis() : void
	{
		$this->postFields = NULL;
		
		# Deleta o Content-Type caso exista
		if ($chave = array_search('Content-Type: application/json', $this->headers))
		{
			unset($this->headers[$chave]);
		}
		else if ($chave = array_search('Content-Type: text/json', $this->headers))
		{
			unset($this->headers[$chave]);
		}
		
		# Deleta o Content-Length caso exista
		if ($chave = array_search('Content-length: 0', $this->headers))
		{
			unset($this->headers[$chave]);
		}		
	}
}


?>