<?php

session_start();

include 'dbConnect.php';

$first = $_POST ['first'];
$last = $_POST ['last'];
$uid = $_POST ['uid'];
$pwd = $_POST ['pwd'];

$sql = "INSERT INTO user (first, last, uid, pwd) VALUES ('$first', '$last', '$uid', '$pwd')";
$result = mysqli_query ($db_connect, $sql);

header ("Location: login.php")


?>