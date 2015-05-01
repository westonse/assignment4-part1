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

if(!isset($_GET['minMultiplicand'])){
echo 'Missing minMultiplicand parameter';
}
if(!isset($_GET['maxMultiplicand'])){
echo 'Missing maxMultiplicand parameter';
}
if(!isset($_GET['minMultiplier'])){
echo 'Missing minMultiplier parameter';
}
if(!isset($_GET['maxMultiplier'])){
echo 'Missing maxMultiplier parameter <br>';
}
if(!is_numeric($_GET['minMultiplicand'])){
echo 'minMultiplicand parameter must be an integer <br>';
}
if(!is_numeric($_GET['maxMultiplicand'])){
echo 'maxMultiplicand parameter must be an integer <br>';
}
if(!is_numeric($_GET['minMultiplier'])){
echo 'minMultiplier parameter must be an integer <br>';
}
if(!is_numeric($_GET['maxMultiplier'])){
echo 'maxMultiplier parameter must be an integer <br>';
}
if($_GET['minMultiplicand'] >= $_GET['maxMultiplicand']){
echo 'minMultiplicand parameter must be less than maxMultiplicand parameter <br>';
}
if($_GET['minMultiplier'] >= $_GET['maxMultiplier']){
echo 'minMultiplier parameter must be less than maxMultiplier parameter <br>';
}
if($_GET['minMultiplier'] <= $_GET['maxMultiplier'] && $_GET['minMultiplicand'] <= $_GET['maxMultiplicand'] && is_numeric($_GET['maxMultiplier']) && is_numeric($_GET['minMultiplier']) && is_numeric($_GET['maxMultiplicand']) && is_numeric($_GET['minMultiplicand'])){
echo '<p><h3>Multiplication Table</h3>
<p>
<table border="1">
<tr>
<td>';

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
echo '<table>';


echo '</body>
</html>';
}
?>