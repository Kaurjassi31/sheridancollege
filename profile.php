<?php 
include("connection.php");
 ?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<?php
session_start();
?>

<h1><?php echo $_SESSION['NAME']; ?></h1>
<p> Welcome you are logged in</p>
<a href="logout.php"><button> Logout </button></a>
</body>
</html>