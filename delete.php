<?php
include("connection.php");
$id=$_GET['id'];
$sql="DELETE FROM `contact` where id='$id'";
$result=$conn->query($sql);
if($result)
{
	header("location:fetch.php");
}
?>