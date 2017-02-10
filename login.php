<?php

session_start();

include 'dbConnect.php';

$uid = $_POST ['uid'];
$pwd = $_POST ['pwd'];

$sql = "SELECT * FROM user WHERE uid = '$uid' AND pwd = '$pwd'";
$result = mysqli_query ($db_connect, $sql);

if (!$row = mysqli_fetch_assoc($result))

{
	echo "Your username or password is incorrect";
}
else
{
	$_SESSION['id'] = $row['id'];
}

header ("Location: login_page.php")

?>