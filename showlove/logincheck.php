
<?php

    if(isset($_POST["submit"]) && $_POST["submit"] == "登陆")

    {

        $user = $_POST["username"];

        $psw = $_POST["password"];

        if($user == "" || $psw == "")

        {

            echo "<script>alert('请输入用户名或密码！'); history.go(-1);</script>";

        }

        else

        {

            $link=mysqli_connect("localhost","root","ROOT")or die("连接失败".mysqli_error());

            mysqli_select_db("注册信息",$link);

            mysqli_query("set names 'gbk'");

            $sql = "select username,password from user where username = '$_POST[username]' and password = '$_POST[password]'";

            $result = mysqli_query($sql);

            $num = mysqli_num_rows($result);

            if($num)

            {

                echo "<script>alert('登陆成功');window.location.href='first.html';</script>";



            }

            else

            {

                echo "<script>alert('用户名或密码不正确！');history.go(-1);</script>";

            }

        }

    }

    else

    {

        echo "<script>alert('提交未成功！'); history.go(-1);</script>";

    }



?>