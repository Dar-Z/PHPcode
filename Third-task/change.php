<!DOCTYPE html>
<html>
<head>
	<title>添加商品</title>
	<style type="text/css">
		h1
		{
			font-size: 50px;
			color: white;
			font-family: "楷体";
		}
		body
		{
			background:cover; 

		}
		input{   
    width: 278px;   
    height: 18px;   
    margin-bottom: 10px;   
    outline: none;   
    padding: 10px;   
    font-size: 15px;   
    color: white;   
    text-shadow:1px 1px 1px;   
    border-top: 1px solid "balck";   
    border-left: 1px solid "balck";   
    border-right: 1px solid "balck";   
    border-bottom: 1px solid "balck";   
    border-radius: 25px;   
    background:none;   
    font-family: Simsun;
}   
 input::-webkit-input-placeholder
 {
 	color: white;
 }
ul
{
      color: white;
      font-size: 25px;
      list-style-type: none;
     position: absolute;
     left:600px;
     top: 300px;


}
#submit
{
    padding-top: 0;
	width: 100px;
	height: 30px;
	font-size: 25px;
}
a
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


</head>
<body  background="https://timgsa.baidu.com/timg?image&quality=80&size=b9999_10000&sec=1549892944814&di=d4257e80318566bdcc21000399f50aa4&imgtype=0&src=http%3A%2F%2Fb-ssl.duitang.com%2Fuploads%2Fitem%2F201411%2F17%2F20141117191541_ThEea.jpeg">
	
<?php
  $oldids = $_GET['ids'];

   $con = mysqli_connect("localhost","root","root");
	mysqli_select_db($con,"test");
	$sql = "SELECT * from store where id=$oldids";
	$result = mysqli_query($con,$sql);
    while($r=mysqli_fetch_assoc($result))
    {
    	$id = $r['id'];
    	$goodsname = $r['goodsname'];
    	$img = $r['img'];
    	$price = $r['price'];
    }
    

$sql1 = "DELETE from store where id=$oldids";

$result = mysqli_query($con,$sql1);

?>

	<h1>欢迎来到后台管理</h1>
	<form method="post" action="changesolve.php">
<ul>
	<li><input type="text" name="id" value="<?php echo $id;?>">id</li>
	<li><input type="text" name="goodsname" value="<?php echo $goodsname;?>">goodsname</li>
	<li><input type="text" name="img" value="<?php echo $img;?>">img地址</li>
	<li><input type="text" name="price" value="<?php echo $price;?>">price</li>
	<li><input id="submit"type="submit" name="submit"value="提交"></li>

</ul>
</form>
<a href="manager.php">返回管理界面</a>
</body>
</html>