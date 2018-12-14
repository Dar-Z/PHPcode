<?php
$lover = $_POST["lover"];

$content = $_POST["content"];
mysqli_connect("localhost", "root", "ROOT");

mysqli_select_db("lovemessage");

mysqli_query("set names 'gdk'");

$result_d = "delete from lovermessage where lover=$lover";
$query_d=mysqli_query($result);

if($query_d){
    echo "删除成功";
}
else {echo "操作失败";}
?>