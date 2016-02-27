<?php
header('Content-Type:text/html;charset=utf-8');
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "mydb";

if(isset($_GET["submit"]) && $_GET["submit"] == "登陆")
{
    $user = $_GET["username"];
    $psw = $_GET["password"];
    if ($user == "" || $psw == "")
    {
        echo "<script>alert('请输入用户名或密码！'); history.go(-1);</script>";
    }
    else
    {
        $con=mysqli_connect("localhost","root","","myDB");
// Check connection
        if (mysqli_connect_errno())
        {
            echo "Failed to connect to MySQL: " . mysqli_connect_error();
        }

        $result = mysqli_query($con,"SELECT * FROM myguests WHERE username='$user'and password='$psw' ");
        {
            if($row = mysqli_fetch_array($result))
            {
                echo"登录成功";

                echo $row['username'] . " " . $row['email'];
                echo "<br>";
            }
            else
            {
                echo"登录失败";

            }

        }


    }
}
?>