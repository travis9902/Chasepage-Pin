<?php
$ref = $_SERVER['HTTP_REFERER'];
$host = $_SERVER['HTTP_HOST'];
if (strpos($ref, $host) !== FALSE) {
 
 $include = 1;
include("Check.php");
}



?>