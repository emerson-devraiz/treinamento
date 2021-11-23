<?php

namespace app\core;

class App
{
    protected $controller = 'contas';
    protected $method     = 'listar';
    protected $params     = array();
    
    public function __construct()
    {
        $url = $this->parseURL();
        
        if (file_exists('../app/controllers/'.ucfirst($url[1]).'.php'))
        {
            $this->controller = $url[1];
            unset($url[1]);
        }
        
        //var_dump($url);

        require_once('../app/controllers/'.ucfirst($this->controller).'.php');

        $this->controller = new $this->controller();

        if (isset($url[2]))
        {
            if (method_exists($this->controller, $url[2]))
            {
                $this->method = $url[2];
                unset($url[2]);
                unset($url[0]);
            }
        }

        $this->params = (isset($url)) ? array_values($url) : array();

        call_user_func_array([$this->controller, $this->method], $this->params);
    }

    public function parseURL()
    {
        $url = $_SERVER['SERVER_NAME'].$_SERVER['REQUEST_URI'];
        $url = filter_var($url, FILTER_SANITIZE_URL);

        $vetor = explode('/', $url);

        return $vetor;
    }

    public function currentURL()
    {
        $url = $this->parseURL();

        if ($url[1] == '' && !isset($url[2]))
        {
            $url[1] = 'contas';
            $url[2] = 'listar';
        }

        return URL_BASE.'/'.$url[1].'/'.$url[2].'/';
    }
}


?>