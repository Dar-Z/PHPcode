<?php
if(isset($_POST["submit"])&&$_POST["submit"]=="注册")
{
	$user = $_POST["username"];
	$psw = $_POST["password"];
	$psw_con = $_POST["confirm"];
	if($user =="" || $psw =="" || $psw_con=="")
	{
		echo "<script> alert('请确认信息完整！！');history.go(-1);</script>";
	}
	else
	{
		if($psw==$psw_con)
		{
			$con = mysqli_connect("localhost","root","root");
			mysqli_select_db($con,"test");
			$sql = "SELECT * from user where username ='$user'";
			$result = mysqli_query($con,$sql);
			$num = mysqli_num_rows($result);
			if($num)
			{
				echo "<script>alert('用户名已存在！！');history.go(-1);</script>";
			}
			else
			{
				$sql_insert = "INSERT into user(username,password) values('$user','$psw')";
				$res_insert =mysqli_query($con,$sql_insert);
				if($res_insert)
				{
					echo "<script>alert('注册成功！');window.location.href='login.html';</script>";
				}
				else
				{
					echo "<script>alert('系统繁忙，请稍后！');history.go(-1);</script>";
				}
			}
		}
		else 
		{
			echo "<script>alert('密码不一致');history.go(-1);</script>";
		}
	}
}
?>