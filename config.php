<?php
	$bot_token = "MTM0NDQxNTg4NDY4NDU1ODQyNw.GnWQbE.aLsGKUag0ceIaOuwpUMF2oiyK0UxSi1w2lPhGc";
	
    $servername = "localhost";
    $username = "yutess";
    $password = "Kolejarz7318";
    $database = "scammer";

    // Create connection
    $conn = new mysqli($servername, $username, $password, $database);
	$conn->query('SET NAMES utf8');

    // Check connection 
    if ($conn->connect_error) {
        die("Connection with the Database failed!");
    }
?>