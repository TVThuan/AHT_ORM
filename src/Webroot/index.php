<?php


use AHT_ORM\Router;
use AHT_ORM\Request;
use AHT_ORM\Dispatcher;
use AHT_ORM\Config\Database;

require_once  '../../vendor/autoload.php';

define('WEBROOT', str_replace("index.php", "", $_SERVER["SCRIPT_NAME"]));
define('ROOT', str_replace("Webroot/index.php", "", $_SERVER["SCRIPT_FILENAME"]));

$dispatch = new Dispatcher();
$dispatch->dispatch();
?>