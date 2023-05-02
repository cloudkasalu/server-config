<?php 


// include_once '../classes/EntryPoint.php';
include __DIR__ . '/includes/autoload.php';
include_once __DIR__ . '/includes/global.php';


$url = strtok(ltrim($_SERVER['REQUEST_URI'], '/'), '?');

$entryPoint = new \classes\EntryPoint();
$entryPoint->run($url);

