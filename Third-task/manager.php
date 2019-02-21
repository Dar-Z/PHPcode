<!DOCTYPE html>
<html>
<head>
	<title>星空商城后台管理</title>
	<META HTTP-EQUIV="Content-Type" CONTENT="text/html;charset=utf-8">
	<style type="text/css">
		body
		{
			background-size: cover;
		}
		table
		{
			
			width: 1000px;
			position: absolute;
			left: 300px;
			top: 100px;

		}
		td
		{
			height: 100px;
			font-size: 20px;
			color: white;
		}
		.id
		{
			position: absolute;
			right: 300px;
			top: 100px;
			width: 200px;
			height: 50px;
			font-size: 25px;
			color: white;
            background:none;
            border:solid;
            opacity: 0.8;
            border-radius: 25px;
            border-color: white; 
		}
		.search
		{
			position: absolute;
			right: 200px;
		    top: 100px;
			height: 50px;
            font-size: 25px;
            border:solid;
            border-color: white;
            border-radius: 25px;
            background:none;
            color: white;  

		}
		h1
		{
			font-size: 50px;
			color: white;
			font-family: "楷体";
		}
		a:link,a:visited
		{
			display: block;
			text-decoration: none;
			color: white;
			border-radius:25px;  
			text-align: center;
		}
		a:hover,a:active
		{
			background-color: red;
		}
	</style>
</head>
<body background="https://timgsa.baidu.com/timg?image&quality=80&size=b9999_10000&sec=1549892944814&di=d4257e80318566bdcc21000399f50aa4&imgtype=0&src=http%3A%2F%2Fb-ssl.duitang.com%2Fuploads%2Fitem%2F201411%2F17%2F20141117191541_ThEea.jpeg">
<h1>欢迎来到后台管理</h1>
<table>
	<tr>
		<td>商品id</td>
		<td>商品名称</td>
		<td>商品图像</td>
		<td>商品单价</td>
	</tr>
	<?php

	$con = mysqli_connect("localhost","root","root");
	mysqli_select_db($con,"test");
	$sql = "SELECT * from store";
	$result = mysqli_query($con,$sql);
	while($row=mysqli_fetch_assoc($result))
	{
		echo"
		<tr>
             <td>".$row['id']."</td>
             <td>".$row['goodsname']."</td>
             <td><img src =".$row['img']." height=100px width=100px></td>
             <td>".$row['price']."</td>
         
         <td><a href ='clearout.php?ids=".$row['id']."'>删除商品</a></td>
         <td><a href = 'change.php?ids=".$row['id']."'>改变商品信息</a> </td> 
         <td><a href = 'newAdd.php'>添加新商品</a></td>  
		";
	}
	?>
    <form method="post" action="search.php">
    	<input class= "id"type="text" name="id" placeholder="请输入对应id">
    	<input class="search"type="submit" name="search" value="搜索">
    </form>
</table>
</body>
</html>