<!DOCTYPE html>
<html>
<head>
	<META HTTP-EQUIV="Content-Type" CONTENT="text/html;charset=utf-8">
	<title>欢迎来到星空商城</title>
	<style type="text/css">
	/*商品展示的css*/
		table
		{
			height: 500px;
			width: 1000px;
			position: absolute;
			right: 100px;
			bottom: 200px;
			border:none;
			text-align: center;
			font-weight: bold;
			background: none;
			font-size: 20px;
            
			}
		td
		{
         width: 50px;
         height: 50px;
         border: none;
         color: white;
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
      /* 左侧导航的css*/
       ul{
		list-style-type: none;
		margin: 0;
		padding: 0;
		border: none;
		width:300px;
		height: 300px;
		position: absolute;
		left: 150px;
		top: 300px;
	}
	li
	{
       
		padding-top:30px; 
	}
	a.ce:link,a.ce:visited
	{
         display: block;
         width:300px;
         text-decoration: none;
         font-size: 50px;
         color: #FFFFFF;
         background:none; 
         text-align: center;
         font-weight: bold;
         font-family:Simsun;
         border-radius: 500px;
         border: solid;
         border-color: grey;
         opacity: 0.6; 
	}
	a.ce:hover,a.ce:active
	{
		background-color:#cc0000; 
	}

	p
	{
		color:white;
		font-size: 50px;
		position: absolute;
		left: 250px;
		top: 190px;
	}	
	/*分页样式*/
    a.pre:link,a.pre:visited
    {
    	display: block;
    	width: 100px;
    	color: white;
    	text-align: center;
    	font-size: 20px;
    	position: absolute;
    	right: 400px;
    	bottom: 100px;
    	border: solid;
    	border-color:white;
    	opacity: 0.7;  
    }
    a.pre:hover,a.pre:active
    {
    	background-color:red; 
    }
      a.next:link,a.next:visited
    {
    	display: block;
    	width: 100px;
    	color: white;
    	text-align: center;
    	font-size: 20px;
    	position: absolute;
    	right: 250px;
    	bottom: 100px;
    	border: solid;
    	border-color:white;
    	opacity: 0.7;  
    }
    a.next:hover,a.next:active
    {
    	background-color:red; 
    }
    .bot
    {
    	color: white;
    	font-size: 30px;
    	position: absolute;
    	bottom: 100px;
    	right:  800px;
    	letter-spacing: 10px;
    	opacity: 0.7;
    }
    h1
    {
    	color: white;
    	font-size: 50px;
    	font-family: "楷体";
    	
    	position: absolute;
    	left: 100px;
    	top: 50px;
    }
    p{
    	font-family: "楷体";
    	opacity: 0.8;
    }
	</style>
</head>
<body background="https://timgsa.baidu.com/timg?image&quality=80&size=b9999_10000&sec=1549892944814&di=d4257e80318566bdcc21000399f50aa4&imgtype=0&src=http%3A%2F%2Fb-ssl.duitang.com%2Fuploads%2Fitem%2F201411%2F17%2F20141117191541_ThEea.jpeg">
    <h1>欢迎来到星空商城</h1>
     <p>分&nbsp类</p>
	<ul>
	
	<li><a class="ce" href = "index.php?pageNow=3">壁纸</a></li>
	<li><a class="ce" href="index.php?pageNow=1">手机</a></li>
	<li><a class="ce" href="index.php?pageNow=2">汽车</a></li>	
	
</ul>

<table border="1" width="100%" cellpadding="0" cellspacing="0">
	<th>

		<td>商品名称</td>
		<td>图片</td>
		<td>价格</td>
	</th>
	<?php

 $con = mysqli_connect("localhost","root","root");
 mysqli_select_db($con,"test");

 $pageSize = 2;
 $rowCount = 0;
 $pageNow = 1;
 $pageCount= 0;

 if(!empty($_GET['pageNow']))
 {
    $pageNow = $_GET['pageNow'];
 }

  $sql = "SELECT count(*) from store";
  $res = mysqli_query($con,$sql);

  if($row = mysqli_fetch_row($res))
  {
      $rowCount = $row[0];
  }

  $pageCount = ceil(($rowCount/$pageSize));
  $pageStart = ($pageNow - 1)*$pageSize;

  $sql1 = "SELECT * from store limit $pageStart,$pageSize";
  $res1 = mysqli_query($con,$sql1);

  while($v = mysqli_fetch_assoc($res1))
  {
    echo "
    <tr>

        <td>".$v['id']." </td>
        <td>".$v['goodsname']."</td>
        <td height=100px width = 100px><img src=".$v['img']." height=100px width=100px></td>
        <td>".$v['price']."元</td>
        <td><a href = 'add.php?ids=".$v['id']."'>添加购物车</a></td>
        <td><a href = 'shoppingcar.php'>查看购物车</a></td>
    </tr>
    "   ;
  }

?>
<?php   if($pageNow>1) { ?>
    <a class="pre"href="index.php?pageNow=<?php echo $pageNow-1?>">上一页</a>
<?php } else {?>
    <a class="pre"href="index.php?pageNow=<?php echo $pageNow?>">上一页</a>
<?php }?>
<?php   if($pageNow<$pageCount) { ?>
    <a class="next"href="index.php?pageNow=<?php echo $pageNow+1?>">下一页</a>
<?php } else {?>
    <a class="next"href="index.php?pageNow=<?php echo $pageNow?>">下一页</a>
<?php }?>
    <div class="bot">当前页为第<?php echo $pageNow?>页/共<?php echo $pageCount?>页</div>
</table>
   
</body>
</html>
