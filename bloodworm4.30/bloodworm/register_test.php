<?php
header('Content-Type:text/html;charset=utf-8');
$user= $email = $psw = $confirm = "";
$decision=1;

if(isset($_POST["register"]) &&$_POST["register"] == "注册") {
    $user = $_POST["username"];
    $email = $_POST["email"];
    $psw = $_POST["password"];
    $confirm = $_POST["password_confirm"];
    $privilege = $_POST["privilege"];
   // echo "<script>alert($privilege);</script>";

    {

        if (empty($user))
        {
            echo "<script>alert('用户名是必填的');</script>";
        }
        else
        {
            if (!preg_match("/^[a-zA-Z ]*$/",$user))
            {
                // 检查姓名是否包含字母和空白字符
                echo "<script>alert('用户名只允许字母和空格');</script>";

            }
            else
            {
                $decision= $decision+1;
            }
        }


        if (empty($email))
        {
            echo "<script>alert('邮箱是必填的');</script>";

        }

        else
        {

            if (!preg_match("/([\w\-]+\@[\w\-]+\.[\w\-]+)/", $email))
            {
                echo "<script>alert('无效的 email 格式');</script>";

            }
            else
            {
                $decision = $decision + 1;
            }
        }

        if (empty($psw))
        {
            echo "<script>alert('密码不能为空');</script>";

        }
        else
        {
            $decision= $decision+1;
        }


        if ($confirm!=$psw)
        {
            echo "<script>alert('两次密码输入必须一致');</script>";
        }
        else
        {
            $decision= $decision+1;
        }
    }
}
else
{
    echo"数据传递失败";
}
?>

<?php

if($decision>4)
{
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "bloodworm_db";

// 创建连接
    $conn = mysqli_connect($servername, $username, $password, $dbname);
// 检测连接
    if (!$conn)
    {
        die("Connection failed: " . mysqli_connect_error());
    }

    $sql = "INSERT INTO tb_e_account_temporarily (username,password, privilege,email)
VALUES ('$user', '$psw',' $privilege', '$email')";

    if (mysqli_query($conn, $sql))
    {
        echo "<script>alert('注册信息已提交，等待管理员验证');</script>";
        echo "<script>location.href='register.php';</script>";
    }
    else
    {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }

    mysqli_close($conn);

}
else
{
    //echo "<script>alert('fail login');</script>";
    echo "<script>location.href='register.php';</script>";
}
/* {
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "mydb";

// 创建连接
    $conn = mysqli_connect($servername, $username, $password, $dbname);
// 检测连接
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }

    $sql = "INSERT INTO MyGuests (username,password, email)
   VALUES ($user, $psw, $email)";
    //   echo "<script>alert('succeed login');</script>";
    echo "<script>location.href='PersonRegister.php';</script>";
}
mysqli_close($conn);*/
?>










