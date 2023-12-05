<?php
date_default_timezone_set('Europe/Dublin');
$databaseHost = 'localhost';
$databaseName = 'user';
$databaseUsername = 'root';
$databasePassword = '';
$port=3307;
$mysqli = mysqli_connect($databaseHost, $databaseUsername, $databasePassword, $databaseName,$port); 
 
?>
