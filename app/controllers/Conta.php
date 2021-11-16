<?php

use app\core\Controller;


class Cliente extends Controller
{
    public function __construct()
    {
        
    }

    public function listar()
    {
        


        $this->view('conta/listar', $objDados);
    }

    # Criar método inserir

    # Criar método editar

    # Criar método excluir

}



?>