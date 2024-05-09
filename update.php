<?php
include("connection.php");
$id=$_GET['id'];
if(isset($_POST['btnn']))
{
$name=$_POST['name'];
$email=$_POST['email'];
$phone=$_POST['phone'];
$address=$_POST['address'];
$course=$_POST['course'];
$gender=$_POST['gender'];

$sqll="UPDATE `contact` set name='$name',email='$email',phone='$phone',address='$address',course='$course',gender='$gender' where id='$id'"; 
$result=$conn->query($sqll);
if($result)
{
header("location:fetch.php");
}
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Update data</title>
</head>
<body>
<?php
include("connection.php");
$id=$_GET['id'];
$sql="SELECT * from `contact` where id='$id'";
$result=$conn->query($sql);
while($row=$result->fetch_assoc())
{
$name=$row['name'];
$email=$row['email'];
$phone=$row['phone'];
$address=$row['address'];
$course=$row['course'];
$gender=$row['gender'];# code...
}
?>
<form method="POST">
<table>
<tr>
<th></th>
<td><input type="text" name="name" placeholder="<?php echo "name"; ?>"  > </td>
</tr>	

<tr>
<th></th>
<td><input type="text" name="email"  placeholder="<?php echo "email"; ?>" > </td>
</tr>


<tr>
<th></th>
<td><input type="text" name="phone" placeholder="<?php echo "phone";  ?>" > </td>
</tr>

<tr>
<th></th>
<td><input type="text" name="address" placeholder="<?php echo "address";  ?>" > </td>
</tr>

<tr>
<th></th>
<td><input type="text" name="course" placeholder="<?php echo "course";  ?>" > </td>
</tr>

<tr>
<th></th>
<td><input type="text" name="gender" placeholder="<?php echo "gender"; ?>" > </td>
</tr>

</table>
<button type="submit" name="btnn"> login </button>
</form>
</body>
</html>