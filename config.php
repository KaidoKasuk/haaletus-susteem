<?php
// Basic connection settings
$databaseHost = 'ita.voco.ee';
$databaseUsername = 'vso25kasuk_sten';
$databasePassword = 'password';
$databaseName = 'vso25kasuk_haaletus';

// Connect to the database
$mysqli = mysqli_connect($databaseHost, $databaseUsername, $databasePassword, $databaseName); 
?>