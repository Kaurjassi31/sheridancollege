<html>
<head>
<title> Fetch data </title>
<style>


</style>
</head>
<body>

<?php
include("connection.php");
$sql= "SELECT * FROM `contact` order by id DESC";
$result=$conn->query($sql);
?>
<table border="2" width="100%">
<tr>
<th> id </th>
<th> name </th>
<th> email </th>
<th> phone </th>
<th> address</th>
<th> course </th>
<th> gender</th>
<th> oprations</th>
</tr>

<?php
$count=1;
while($row=$result->fetch_assoc())
{
?>

<tr>
<td><?php echo $count; ?></td>
<td><?php echo $row['name']; ?></td>
<td><?php echo $row['email']; ?></td>
<td><?php echo $row['phone']; ?></td>
<td><?php echo $row['address']; ?></td>
<td><?php echo $row['course']; ?></td>
<td><?php echo $row['gender']; ?></td>
<td><a href="update.php?id=<?php echo $row['id'];  ?>"> UPDATE</a></td>
<td><a href="delete.php?id=<?php echo $row['id'];  ?>">DELETE</a></td>
</tr>

<?php
$count++;
}
?>

</table>
</body>
</html>