<?php

use app\core\Model;

class Conta extends Model
{
    private $conexao;

    public function __construct()
    {
        $this->conexao = Model::getConn();
    }

    public function listar()
    {
        $sql   = "SELECT * FROM conta";
        $query = $this->conexao->query($sql);
        $dados = $query->fetch_all(MYSQLI_ASSOC);

        return $dados;
    }

    # Criar método inserir

    # Criar método editar

    # Criar método excluir

}





?>