<?php
   if(isset($_POST['submit'])&&$_POST['submit']=='登录')
{
	$admin = $_POST['admin'];
	if($admin=="")
	{
		echo "<script>alert('请输入正确密码');history.go(-1);</script>";
	}
	else
	{
		$con = mysqli_connect("localhost","root","root");
 mysqli_select_db($con,"test");
 $sql = "SELECT root from admin";
 $result = mysqli_query($con,$sql);
 $row=mysqli_fetch_array($result);
 echo $row[0];

if($admin==$row[0])
 {
 	echo"<script>alert('欢迎来到后台管理');window.location.href='manager.php';</script>";
 }
 else
 {
 	echo"<script>alert('管理密码错误');history.go(-1);</script>";
 }
	}
}




 
?>