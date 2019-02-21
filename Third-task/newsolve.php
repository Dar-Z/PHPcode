<?php
$id=$_POST['id'];
$name=$_POST['goodsname'];
$img=$_POST['img'];
$price=$_POST['price'];

 $con = mysqli_connect("localhost","root","root");
 mysqli_select_db($con,"test");
 $sql = "SELECT * from store where id=$id";
 $result = mysqli_query($con,$sql);
 if(mysqli_num_rows($result)>0)
 {
 	echo "<script>alert('该id已存在，请重新输入');history.go(-1);</script>";

 }
 else 
 	{
 		$sql1="INSERT into store(id,goodsname,img,price)values('$id','$name','$img','$price')";
 		$res1=mysqli_query($con,$sql1);
 		if($res1)
 		{
 			echo "<script>alert('商品添加成功');window.location.href='manager.php';</script>";
 		}
 		else
 		{
 			echo "<script>alert('操作失败，请重新填写');history.go(-1);</script>";
 		}
 	}

?>