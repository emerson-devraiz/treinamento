<?php

ini_set('display_errors', 1);
ini_set('display_startup_erros', 1);
error_reporting(E_ALL);

session_start();

require('../vendor/autoload.php');

use app\core\App;

//define('URL_BASE', 'http://chronos.com');
define('URL_BASE', $_SERVER['PHP_SELF']);

$objApp = new App();

?>