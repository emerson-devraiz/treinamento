<?php

use app\core\Controller;

class Contas extends Controller
{
    public function __construct()
    {
        
    }

    public function listar()
    {
        //echo 'Teste';

        $objDados = '';

        $this->view('conta/listar', $objDados);
    }

    # Criar método inserir

    # Criar método editar

    # Criar método excluir

}



?>