<?php
include "db.php";
$id=$_GET['id'];
if(isset($_POST['done']))
{
$id=$_POST['id'];
$first_name=$_POST['first_name'];
$last_name=$_POST['last_name'];
$gender=$_POST['gender'];
$email=$_POST['email'];

$edit=mysqli_query($con,"UPDATE `employee-details` SET `first_name`='$first_name',`last_name`='$last_name',`gender`='$gender',`email`='$email' WHERE id='$id'");
if(!$edit)
{
	echo mysqli_error($con);
}
else
{
header("location:record.php");
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