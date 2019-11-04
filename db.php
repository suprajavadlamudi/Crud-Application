<?php
$con=mysqli_connect("localhost","root","");
$db=mysqli_select_db($con,"demo");
if(!$db)
{
echo "not connected";
}
else
{
	echo "connected";
}

?>