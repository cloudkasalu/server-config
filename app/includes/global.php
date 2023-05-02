<?php

$public_end = strpos($_SERVER['SCRIPT_NAME'], '/public/index.php');
echo $public_end; 
$doc_root = substr($_SERVER['SCRIPT_NAME'], 0, $public_end);
define("ROOT", $doc_root);

?>