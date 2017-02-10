<?php

$db_host = "localhost";
$db_username = "root";
$db_password = "root";
$db_name = "logintest";

//connecting to the database:

$db_connect = mysqli_connect($db_host, $db_username, $db_password, $db_name) or die ("Unable to connect to MySQL");

//check valid connection:



?>