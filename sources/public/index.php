<?php
ob_start();
session_start();
define('SECURITY',true);
require dirname(__DIR__) . '/vendor/autoload.php';
require dirname(__DIR__) . '/Core/Functions.php';
require dirname(__DIR__) . '/helpers/functions.php';
require dirname(__DIR__) . '/public/ajax.php';
require dirname(__DIR__) . '/App/Routers/FrontEnd/Routers.php';
$_SESSION['SITE_URL'] = Config::SITE_URL;
ob_end_flush();

