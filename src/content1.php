<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);



session_start();

if(isset($_GET['action']) && $_GET['action'] == 'end' || $_SESSION['name'] == 'undefined'){
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
		$_SESSION['name'] = $_POST['user_input'];
}
/*if($_SERVER['REQUEST_METHOD'] != 'POST' && $_SESSION['name']==null){
	$_SESSION = array();
	session_destroy();
	$filePath = explode('/', $_SERVER['PHP_SELF'], -1);
	$filePath = implode('/',$filePath);
	$redirect = "http://" . $_SERVER['HTTP_HOST'] . $filePath;
	header("Location: {$redirect}/login.php", true);
	die();
} */
if($_SESSION['name']!=null){
echo '<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8" />
<title></title>
</head>
<body>';

	echo "Hi $_SESSION[name] you have visited this page $_SESSION[visits] times" ."<br>";
	echo'Click <a href = "http://web.engr.oregonstate.edu/~westonse/src/content1.php?action=end"> Here </a> To logout';
	echo'Click <a href = "http://web.engr.oregonstate.edu/~westonse/src/content2.php"> Here </a> To go to content2.php';
	$_SESSION['visits']++;
}
else{

	echo 'Hi you have not entered a valid username, please click <a href = "http://web.engr.oregonstate.edu/~westonse/src/content1.php?action=end"> Here </a> to return 
		  to the login page. <br>';
}
echo '</body>
</html>';

}
?>