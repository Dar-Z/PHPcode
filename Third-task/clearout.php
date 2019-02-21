<?php

$ids = $_GET["ids"];

$con = mysqli_connect("localhost","root","root");

mysqli_select_db($con,"test");

$sql = "DELETE from store where id=$ids";

$result = mysqli_query($con,$sql);

if($result)
{
	echo "<script>alert('删除成功');window.location.href='manager.php';</script>";
}

?>