<?php
header('Content-Type:text/html;charset=utf-8');
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "mydb";
if(isset($_GET["submit"]) &&$_GET["submit"] == "登录") {
    $email = $_GET["email"];
    $psw = $_GET["password"];
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
            {
                  echo "<script>alert('succeed login');</script>";
                  echo "<script>location.href='hometest.php';</script>";

            }
            else
            {
                echo "<script>alert('fail login');</script>";
                echo "<script>location.href='login_check_test.php';</script>";

            }

        }
    }

}
else
    echo"数据传递失败";
?>