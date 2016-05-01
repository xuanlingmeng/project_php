<?php
    $con=mysqli_connect("localhost","root","","bloodworm_db");
    $email=$_POST["email"];
    $index=0;
    $password=array();
    if (mysqli_connect_errno())
    {
        echo "Failed to connect to MySQL: " . mysqli_connect_error();
    }

    $result = mysqli_query($con,"SELECT * FROM tb_e_account
        WHERE Account_Email='$email'");

    while($row = mysqli_fetch_array($result))
    {
        $password=$row['Account_Password'];
    }
    //$password=$person[0];

    if($password !=NULL)
    {
        $to =$email;
        $now = date("Y-m-d");
        $from_name = '血吸虫病管理系统';
        $from_email = '管理员';
        $headers = "From: $from_name <$from_email>";
        $body ="尊敬的用户，您好！您的登录密码是：". $password;
        $subject = "[$now] 密码找回";
        if (mail($to, $subject, $body, $headers)) {
            echo "<script>alert('密码发送成功，请查收！');</script>";
            echo "<script>location.href='ForgetPassword.php';</script>";
        } else {
            echo "邮件发送失败！";
        }
    }
     else
     {
         echo "<script>alert('邮箱不存在！');</script>";
         echo "<script>location.href='ForgetPassword.php';</script>";
     }

//echo json_encode($person);
?>