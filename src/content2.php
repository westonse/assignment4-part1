<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);



session_start();
if(isset($_GET['action']) && $_GET['action'] == 'end'){
																		    /*
																				Code Citation: This code is copied from lecture
																				notes with the exception of the redirect url. It is 
																				a really nice way to perform logout functionality 
																				by destroying the session and redirecting the user 
																				to the login page. 
																			*/
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
echo '<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8" />';
if($_SERVER['REQUEST_METHOD'] != 'POST' && $_SESSION['name']==null){
echo '<meta http-equiv="refresh" content="0,URL=http://web.engr.oregonstate.edu/~westonse/src/content2.php?action=end" />';
}
echo '<title></title>
</head>
<body>';

if($_SESSION['name']!=null){
	echo "Hi, $_SESSION[name] welcome to content2.php!" ."<br>";
	echo'Click <a href = "http://web.engr.oregonstate.edu/~westonse/src/content2.php?action=end"> Here </a> To logout <br>';
	echo'Click <a href = "http://web.engr.oregonstate.edu/~westonse/src/content1.php"> Here </a> To go to content1.php';
	
	
echo '</body>
</html>';
}
}

?>