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


echo '<p><h3>GET Variables</h3>
<p>
<table border="1">
<tr>
<td>';


//if(isset($_GET['minMultiplicand']) && isset($_GET['maxMultiplicand']) && isset($_GET['mMultiplier']) && isset($_GET['maxMultiplier'])){

$minNumRows; 
$minNumCols = $_GET['minMultiplier'];
$maxNumCols = $_GET['maxMultiplier'];
for($minNumCols = $_GET['minMultiplier']; $minNumCols<=$_GET['maxMultiplier']; $minNumCols++){
		echo '<td>' . $minNumCols;
}

for($minNumRows = $_GET['minMultiplicand']; $minNumRows<=$_GET['maxMultiplicand']; $minNumRows++){
	echo '<tr><td>' . $minNumRows;
	for($minNumCols = $_GET['minMultiplier']; $minNumCols<=$_GET['maxMultiplier']; $minNumCols++){
		echo '<td>' . $minNumCols * $minNumRows;
	}
}


//}
echo '<table>';


echo '</body>
</html>';



?>