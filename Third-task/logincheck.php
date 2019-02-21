<?php
if(isset($_POST["submit"])&&$_POST["submit"] == "登录")
{
	$user = $_POST["username"];
	$psw = $_POST["password"];
	if($user =="" || $psw == "")
	{
		echo "<script> alert('请输入用户名或密码！！！');history.go(-1);
		</script>";
	}
	else {
		$con = mysqli_connect("localhost","root","root");
		mysqli_select_db($con,"test");
        $sql = "SELECT password from user where username = '$user' ";  
        $result = mysqli_query($con,$sql);
        $arr = mysqli_fetch_array($result);
        if($arr[0]==$psw)
        
        {
        	session_start();
        	$_SESSION['username']=$user;
        	echo "<script> alert('登录成功');window.location.href='index.php';</script>";
        }else
        {
           echo "<script> alert('用户密码错误或账户不存在');history.go(-1);</script>";
        }
      
	}
}
 ?>