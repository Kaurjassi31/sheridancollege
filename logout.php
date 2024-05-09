<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<?php
include("connection.php");
session_destroy();
unset($_SESSION['id']);
header("location:login.php")
?>
</body>
</html>