<?php
header('Content-Type:text/html;charset=utf-8');
session_start();
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "bloodworm_db";
if(isset($_POST["submit"]) &&$_POST["submit"] == "登录") {
    $email = $_POST["email"];
    $psw =$_POST["password"];
    if ($email == "" || $psw == "")
    {
        echo "<script>alert('请输入用户名或密码！'); history.go(-1);</script>";
    }
    else
    {
        $con = mysqli_connect("localhost", "root", "", "bloodworm_db");
// Check connection
        if (mysqli_connect_errno())
        {
            echo "Failed to connect to MySQL: " . mysqli_connect_error();
        }

        $result = mysqli_query($con, "SELECT * FROM tb_e_account WHERE  Account_Email='$email'and Account_Password='$psw' ");
        {
            if ($row = mysqli_fetch_array($result))
            {

                 $username= $row['Account_Name'] ;
                 $privilege=$row['Account_Privilege'];
                 $_SESSION['name'] = $username;
                 $_SESSION['privilege']=$privilege;
                echo "<script>alert('succeed login');</script>";
                if($_SESSION['privilege']==4)
                {
                    echo "<script>location.href='personrequests.php';</script>";
                }
                else if( $_SESSION['privilege']==1)
                {
                    echo "<script>location.href='nowsnail.php';</script>";
                }
                else if($_SESSION['privilege']==2)
                {
                    echo "<script>location.href='homeTest.php';</script>";
                }
                else if($_SESSION['privilege']==3)
                {
                    echo "<script>location.href='is_lab.php';</script>";
                }

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