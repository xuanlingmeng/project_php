<?php
header('Content-Type:text/html;charset=utf-8');
session_start();
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "mydb";
if(isset($_POST["submit"]) &&$_POST["submit"] == "登录") {
    $email = $_POST["email"];
    $psw =$_POST["password"];
    if ($email == "" || $psw == "")
    {
        echo "<script>alert('请输入用户名或密码！'); history.go(-1);</script>";
    }
    else
    {
        $con = mysqli_connect("localhost", "root", "", "myDB");
// Check connection
        if (mysqli_connect_errno())
        {
            echo "Failed to connect to MySQL: " . mysqli_connect_error();
        }

        $result = mysqli_query($con, "SELECT * FROM myguests WHERE email='$email'and password='$psw' ");
        {
            if ($row = mysqli_fetch_array($result))
            {    $_SESSION['name'] = $email;


               echo "<script>alert('succeed login');</script>";
                echo "<script>location.href='homeTest_ajaxtest.php';</script>";
            }
            else
            {
                echo "<script>alert('fail login');</script>";

                echo "<script>location.href='LoginTest.php';</script>";

            }

        }
    }

}
else
    echo"数据传递失败";



?>