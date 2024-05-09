<?php
include("connection.php");
if(isset($_POST['btnn']))
{
	// $email=$_POST['email'];
	$name=$_POST['name'];

	$sql="SELECT * from contact where name='$name' ";
	$result=$conn->query($sql);
	while ($row=$result->fetch_assoc()) 
	{
	 session_start();
	 $_SESSION['ID']=$row['id'];
	 $_SESSION['NAME']=$row['name'];
	 if($row['name']== $name)
	 {
	 	header("location:profile.php");
	 }
	 else
	 {
	 	$error="record not found";
	 }
	}
}
?>
<!DOCTYPE html>
<html>
<head>
	<title> login </title>
	<style type="text/css">
.a
{
	height:700px;
	width:100%;
	background-color:black;
}
.b
{
	height:300px;
	width:40%;
	background-color:white;
	margin-top:60px;
}
</style>
</head>
<body>

<div class="a">
	<br>
	<center>
		<div class="b">
			<br><br>
		<h1> LOGIN </h1>
		<br>
		<form method="POST">
		<input type="text" name="name" placeholder="enter name">
		<br><br>
		<button type="submit" name="btnn"> submit </button>
         </form>

		</div>

	</center>
</div>
</body>
</html>