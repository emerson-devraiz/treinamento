<?php

namespace app\core;

class Model
{
    private static $instance;

    public static function getConn(string $host = '127.0.0.1', string $user = 'gabriel', string $password = '123', string $bancoDados = 'treinamento')
    {
        if (!isset(self::$instance))
        {
            self::$instance = new \mysqli($host, $user, $password, $bancoDados);
            self::$instance->set_charset("utf8");

            if (self::$instance->connect_errno)
            {
                return die("Ocorreu um erro na conexão MySQL!");
            }
        }
        
        return self::$instance;
    }
}

?>