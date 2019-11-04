<?php
include "db.php";
?>
<table border="2">
<tr>
<th>ID</th>
<th>FIRST_NAME</th>
<th>LAST_NAME</th>
<th>GENDER</th>
<th>EMAIL</th>
<th>Edit</th>
<th>Del</th>
</tr>
<?php
$record=mysqli_query($con,"SELECT * FROM `employee-details`");
while($data=mysqli_fetch_array($record))
{
	?>
	<tr>
	<td><?php echo $data['id'];?></td>
	<td><?php echo $data['first_name'];?></td>
	<td><?php echo $data['last_name'];?></td>
	<td><?php echo $data['gender'];?></td>
	<td><?php echo $data['email'];?></td>
	<td><a href="edit.php?id=<?php echo $data['id'];?>"><img src="images/edit.png" width="30px" height="30px"></a></td>
	<td><a href="del.php?id=<?php echo $data['id'];?>"><img src="images/delete.png" width="30px" height="30px"</a></td>
<tr>
	<?php
}
?>
</table>