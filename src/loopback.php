<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
echo '<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8" />
<title></title>
</head>
<body>';
 
if($_GET != null){
	echo "{Type: Get, parameters: ";
	echo json_encode($_GET,JSON_UNESCAPED_UNICODE);
	echo "}";
}
else if($_POST != null){
	echo "{Type: Post, parameters: ";
	echo json_encode($_POST,JSON_UNESCAPED_UNICODE);
	echo "}";
}
else{
	echo '{"Type":"[GET|POST]", "parameters":null}';
}

 
echo '</body>
</html>';



?>
