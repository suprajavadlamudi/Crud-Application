<?php
include "db.php";
$id=$_GET['id'];
$del=mysqli_query($con,"DELETE FROM `employee-details` WHERE id='$id'");
header("location:record.php");
?>