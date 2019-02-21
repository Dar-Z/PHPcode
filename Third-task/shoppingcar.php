<!DOCTYPE html>
<html>
<head>
	<META HTTP-EQUIV="Content-Type" CONTENT="text/html;charset=utf-8">
	<title>shoppingcar</title>
</head>
<style type="text/css">
    table
        {
            
            position: absolute;
            right: 300px;
            top: 300px;
            width: 1000px;
            text-align: center;
            font-weight: bold;
            background: none;
            font-size: 20px;
           
            }
        td
        {
         width: 50px;
         height: 50px;
         border:none;
         color: white;
         padding: 10px;
         
        }
       body
       {
        background-size: cover;

       }
       a:link,a:visited
       {
        display: block;
        text-decoration: none;
        color: white;
        
        width: 100px;

        font-weight: bold;
        border-radius: 25px;
        
       }
       a:hover,a:active
       {
        background-color: red;
       }
       body
       {
        background-size: cover;
       }
       h2
       {
        color: white;
        position: absolute;
        top: 0;
        left:400px;

       font-size: 100px;
       }
       #break
       {


display: block;
text-decoration: none;
border: solid;
border-color: white;
width: 200px;
font-size: 25px;
color: white;
border-radius: 25px;
text-align: center;
position: absolute;
right: 200px;
bottom: 50px;
opacity: 0.8;

       }
</style>
<body background="https://timgsa.baidu.com/timg?image&quality=80&size=b9999_10000&sec=1550567452&di=7085f4b6ff7dff1f2192269a5fa04af2&imgtype=jpg&er=1&src=http%3A%2F%2Fimgsrc.baidu.com%2Fimgad%2Fpic%2Fitem%2F8601a18b87d6277fe19e8b0223381f30e924fc78.jpg">
<h2>购物车的商品</h2>
<table cellpadding="0" cellspacing="0" border="1" width="100%">
	<tr>
		<td>商品名称</td>
        <td>商品图像</td>
		<td>商品单价</td>
		<td>购买数量</td>
	</tr>
	<?php
	session_start();
	$arr = $_SESSION["gwc"];
    
    
    $con = mysqli_connect("localhost","root","root");
    mysqli_select_db($con,"test");
    
    foreach($arr as $s)
    {
    	$sql = "SELECT * from store where id='$s[0]'";
    	$result = mysqli_query($con,$sql);

    	while($r=mysqli_fetch_assoc($result))
    	{
    		echo"
            <tr>
            <td>".$r['goodsname']."</td>
            <td><img src=".$r['img']."></td>
            <td>".$r['price']."</td>
            <td>".$s[1]."</td>
            <td><a href = 'delete.php?ids=".$s[0]."'>删除</a></td>
            <td><a href = 'index.php'>返回商城</a></td>
            </tr>
    		";
    	}
    }
	?>
	<a id="break" href="index.php">返回商城主页</a>
</table>
</body>
</html>
