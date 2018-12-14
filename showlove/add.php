<?php

if(isset($_POST["submit"]) && $_POST["submit"] == "提交") {

    $lover = $_POST["lover"];

    $content = $_POST["content"];

    if ($lover == "" || $content == "") {

        echo "<script>alert('请确认信息完整性！'); history.go(-1);</script>";

    } else {

        mysqli_connect("localhost", "root", "ROOT");

        mysqli_select_db("lovemessage");

        mysqli_query("set names 'gdk'");


        $sql_insert = "insert into lovermessage (lover,content) values('$_POST[lover]','$_POST[content]')";

        $res_insert = mysqli_query($sql_insert);


        if ($res_insert) {

            echo "<script>alert('提交成功！');window.location.href='first.html'; history.go(-1);</script>";

        } else {

            echo "<script>alert('系统繁忙，请稍候！'); history.go(-1);</script>";

        }
    }
}else

{

    echo "<script>alert('提交未成功！'); history.go(-1);</script>";}



?>








