<?php
session_start();

$ids = $_GET["ids"];

if(empty($_SESSION["gwc"]))
{
	$arr = array(
  array($ids,1)
	);
	$_SESSION["gwc"] = $arr;
}
else 
{
	$arr = $_SESSION["gwc"];
	$chuxian = false;
	foreach($arr as $s){
		if($s[0]==$ids)
		{
			$chuxian = true;
		}
	}
	if($chuxian)
	{
		for($i=0;$i<count($arr);$i++)
		{
           if($arr[$i][0]==$ids)
{
	$arr[$i][1]+=1;
}
		}
		$_SESSION["gwc"] = $arr; 
	}
	else
	{
		$asg = array($ids,1);
		$arr[] = $asg;
		$_SESSION["gwc"] = $arr;
	}
}

header("location:index.php");
?>