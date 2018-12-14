<?php

if(isset($_POST["Submit"]) && $_POST["Submit"] == "注册")

{

    $user = $_POST["username"];

    $psw = $_POST["password"];

    $psw_confirm = $_POST["confirm"];

    if($user == "" || $psw == "" || $psw_confirm == "")

    {

        echo "<script>alert('请确认信息完整性！'); history.go(-1);</script>";

    }

    else

    {

        if($psw == $psw_confirm)

        {

           $link = mysqli_connect("localhost","root","ROOT");

            mysqli_select_db("注册信息",$link);

            mysqli_query("set names 'gdk'");

            $sql = "select username from user where username = '$_POST[username]'";

            $result = mysqli_query($sql);

            $num = mysqli_num_rows($result);

            if($num)

            {

                echo "<script>alert('用户名已存在'); history.go(-1);</script>";

            }

            else

            {

                $sql_insert = "insert into user (username,password) values('$_POST[username]','$_POST[password]')";

                $res_insert = mysqli_query($sql_insert);



                if($res_insert)

                {

                    echo "<script>alert('注册成功！');window.location.href='login.html'; history.go(-1);</script>";

                }

                else

                {

                    echo "<script>alert('系统繁忙，请稍候！'); history.go(-1);</script>";

                }

            }

        }

        else

        {

            echo "<script>alert('密码不一致！'); history.go(-1);</script>";

        }

    }

}

else

{

    echo "<script>alert('提交未成功！'); history.go(-1);</script>";

}

?>