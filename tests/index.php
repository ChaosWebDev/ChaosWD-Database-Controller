<?php

require(__DIR__ . '/../vendor/autoload.php');

use ChaosWD\Controllers\DatabaseController;

$_ENV['DB_HOST'] = 'localhost';
$_ENV['DB_NAME'] = 'test';
$_ENV['DB_USER'] = 'test';
$_ENV['DB_PASS'] = 'test';

$db = new DatabaseController();
$results = $db->query("SELECT * FROM `test`")->fetchAll();
print_r($results);
