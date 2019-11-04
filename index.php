<?php
include "db.php";
if(isset($_POST['done']))
{
$id=$_POST['id'];
$first_name=$_POST['first_name'];
$last_name=$_POST['last_name'];
$gender=$_POST['gender'];
$email=$_POST['email'];

$insert=mysqli_query($con,"INSERT INTO `employee-details`(`id`, `first_name`, `last_name`, `gender`, `email`) 
VALUES ('$id','$first_name','$last_name','$gender','$email')");
if(!$insert)
{
	echo mysqli_error($con);
}
else
{
	echo "inserted";
}
}
?>
<form method="POST">
<input type="text" name="id" placeholder="User id">
<input type="text" name="first_name" placeholder="first_name">
<input type="text" name="last_name" placeholder="last_name">
<input type="text" name="gender" placeholder="gender">
<input type="text" name="email" placeholder="email">
<input type="submit" name="done">
</form>