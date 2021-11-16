<?php

namespace app;

class Debug
{
    private $debug = 'N';
	private $conexao;
    private $conteudo;    
    private $transacao = 'N';
	private $endereco  = __DIR__.'/';
    private $nome_arquivo;
	
	private $select = 'N';
	private $insert = 'N';
	private $update = 'N';
	private $delete = 'N';

    public function __construct($conexao = NULL)
    {
		$this->conexao = $conexao;
        $this->__setNomeArquivo();
    }

    public function __setDebug(string $debug)
    {
        $this->debug = $debug;
    }

    public function __setEndereco(string $endereco)
    {
        $this->endereco = $endereco;
    }

    public function __setNomeArquivo($nome_arquivo = null)
    {
        if (is_null($nome_arquivo))
        {
            $this->nome_arquivo = basename($_SERVER['PHP_SELF'], '.php');
        }
        else
        {
            $this->nome_arquivo = $nome_arquivo;
        }
        
    }

    public function __setConteudo(string $conteudo, int $qtd = 1)
    {
		if ($this->debug === 'S')
		{
			$this->conteudo .= $conteudo;
			$this->QuebraLinha($qtd);
		}
    }
	
	public function __setSelect(string $select)
    {
		$this->select = $select;
    }

    public function __setInsert(string $insert)
    {
		$this->insert = $insert;
    }

    public function __setUpdate(string $update)
    {
		$this->update = $update;
    }
	
	public function __setDelete(string $delete)
    {
		$this->delete = $delete;
    }
	
	public function __setSql($sql, $query, $dados, $string, int $qtd = 1)
    {
		if ($this->debug === 'S')
		{
			$vetor_sql = explode(' ', $sql);
			$str_sql   = $vetor_sql[0];
			
			if ($this->select === 'S' && $str_sql == 'SELECT')
			{
				$var = ($dados) ? 'true' : 'false';
				$this->__setConteudo('$sql_'.$string.'   = '.$sql);
				$this->__setConteudo('$dados_'.$string.' = '.$var);
				$this->QuebraLinha($qtd);
			}
		
			if ($this->insert === 'S' && $str_sql == 'INSERT')
			{
				$this->__setConteudo('$sql_'.$string.' = '.$sql);
				$this->__setConteudo('Número de linhas afetadas: '.mysqli_affected_rows($this->conexao));
				$this->__setConteudo('Último id inserido: '.mysqli_insert_id($this->conexao));
				$this->QuebraLinha($qtd);
			}
		
			if ($this->update === 'S' && $str_sql == 'UPDATE')
			{
				$this->__setConteudo('$sql_'.$string.' = '.$sql);
				$this->__setConteudo('Número de linhas afetadas: '.mysqli_affected_rows($this->conexao));
				$this->QuebraLinha($qtd);
			}
		
			if (!$query)
			{
				$this->__setConteudo('ERRO!');
				$this->__setConteudo('Query: '.$string);
				$this->__setConteudo('Código de erro MySQL: '.mysqli_errno($this->conexao));
				$this->__setConteudo('Mensagem de erro MySQL: '.mysqli_error($this->conexao));
				$this->QuebraLinha($qtd);

				# Sempre que uma query falhar o DEBUG será ativado para registrar um log 
				$nome_arquivo = 'erro-sql-'.date('d-m-Y').'-as-'.date('H-i');
				$this->__setNomeArquivo($nome_arquivo);
				$this->ConcluiDebug();

				# Para o processo e informa ao usuária o problema se não houver controle de transação
				($this->transacao === 'N') ? die('Erro SQL: query_'.$string) : ''; 
			}
		
		}
		
	}

    public function __setTransacao(string $transacao)
    {
        $this->transacao = $transacao;
    }
	
    public function QuebraLinha($qtd = 1)
    {
        $i = 1;

        while ($i <= $qtd)
        {
            $this->conteudo .= "\n";

            $i++;
        }        
    }

    public function ConcluiDebug()
    {
        if ($this->debug === 'S')
        {
            $nome_arquivo = $this->endereco.$this->nome_arquivo;

            $arquivo = fopen($nome_arquivo.'.txt','w');

            fwrite($arquivo, $this->conteudo);
            
            fclose($arquivo);

            chmod($nome_arquivo.'.txt', 200);
        }
        
    }
}

?>