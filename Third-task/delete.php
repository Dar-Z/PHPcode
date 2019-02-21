<?php 
session_start();
$ids = $_GET['ids'];
echo $ids;
$arr = $_SESSION['gwc'];

foreach($arr as $k => $v)
{
	if($v[0]==$ids)
	{
		
		unset($arr[$k]);
	}
}




$_SESSION['gwc'] = $arr;

header("location:shoppingcar.php");

?>