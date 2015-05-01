<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);



session_start();
if(isset($_GET['action']) && $_GET['action'] == 'end'){
	$_SESSION = array();
	session_destroy();
	$filePath = explode('/', $_SERVER['PHP_SELF'], -1);
	$filePath = implode('/',$filePath);
	$redirect = "http://" . $_SERVER['HTTP_HOST'] . $filePath;
	header("Location: {$redirect}/login.php", true);
	die();
}

if(session_status() == PHP_SESSION_ACTIVE){

	if(!isset($_SESSION['visits'])){
		$_SESSION['visits'] = 0;
	}
if($_SESSION['name']!=null){


echo '<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8" />
<title></title>
</head>
<body>';

	echo "Hi, $_SESSION[name] you have visited this page $_SESSION[visits] times" ."<br>";
	echo'Click <a href = "http://web.engr.oregonstate.edu/~westonse/src/content2.php?action=end"> Here </a> To logout';
	echo'Click <a href = "http://web.engr.oregonstate.edu/~westonse/src/content1.php"> Here </a> To go to content1.php';
	$_SESSION['visits']++;
	
echo '</body>
</html>';
}
else{
	
}
}

?>