<?php
$lover = $_POST["lover"];

$content = $_POST["content"];
mysqli_connect("localhost", "root", "ROOT");

mysqli_select_db("lovemessage");

mysqli_query("set names 'gdk'");

$result = "select lover,content from lovermessage where lover=$lover";
$query=mysqli_query($result);

echo $result;?>