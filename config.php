<?php
require 'environment.php';

global $config;
global $db;
define("BASE_URL", "http://localhost:8080/simples/phpEstoque");

$config = array();
if (ENVIRONMENT == 'development') {
	$config['dbname'] = 'estoque_vini';
	$config['host'] = 'localhost';
	$config['dbuser'] = 'root';
	$config['dbpass'] = '';
};

$db = new PDO("mysql:dbname=" . $config['dbname'] . ";host=" . $config['host'], $config['dbuser'], $config['dbpass']);
$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);