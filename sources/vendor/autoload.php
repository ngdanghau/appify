<?php
if (!defined('SECURITY')) die("You does have access to this!");
function __autoload($file_name) {
	$class = strtolower($file_name);
	if (file_exists(dirname(__DIR__) . '/App/Models/' . $file_name . '.php')) {
		require_once(dirname(__DIR__) . '/App/Models/' . $file_name . '.php');
	} elseif (file_exists(dirname(__DIR__) . '/App/Controllers/' . $file_name . '.php')) {
		require_once(dirname(__DIR__) . '/App/Controllers/' . $file_name . '.php');
	} elseif (file_exists(dirname(__DIR__) . '/App/Controllers/FrontEnd/' . $file_name . '.php')) {
		require_once(dirname(__DIR__) . '/App/Controllers/FrontEnd/' . $file_name . '.php');
	} elseif (file_exists(dirname(__DIR__) . '/App/Controllers/BackEnd/' . $file_name . '.php')) {
		require_once(dirname(__DIR__) . '/App/Controllers/BackEnd/' . $file_name . '.php');
	} elseif (file_exists(dirname(__DIR__) . '/Core/' . $file_name . '.php')) {
		require_once(dirname(__DIR__) . '/Core/' . $file_name . '.php');
	} elseif (file_exists(dirname(__DIR__) . '/config/' . $class . '.php')) {
		require_once(dirname(__DIR__) . '/config/' . $class . '.php');
	} else {
		die($file_name . ' không có trong hệ thống');
	}
}