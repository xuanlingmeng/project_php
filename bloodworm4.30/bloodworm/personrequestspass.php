<?php
//<script src="http://code.jquery.com/jquery-latest.js"></script>
    $data=array();
    $person=array();
    $index=0;
    $postemail=array();
    $data=$_GET['str'];
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "bloodworm_db";
    $person=array();
    $con = new mysqli($servername, $username, $password, $dbname);
//echo ($name);
    if($data=='0')
    {
        echo "<script>alert('所有用户信息均被拒绝！');</script>";
        echo "<script>location.href='homeTest.php';</script>";
    }

    else

    {
        $name = explode(',',$data);
//        for($index=0;$index<count($name);$index++)
//        {
//            echo $name[$index];echo "</br>";
//        }
        $sql="SELECT username,password,email,privilege FROM tb_e_account_temporarily ";
        $result=mysqli_query($con,$sql);
        while($row=mysqli_fetch_array($result,MYSQLI_NUM))
        {
            $person[]=$row;
        }

//        echo json_encode($person);
//        echo json_encode($name);
//        echo (count($person));
//        echo (count($name));
         for($i=0;$i<count($person);$i++)
        {
            for($j=0;$j<count($name);$j++)
            {
                if($person[$i][0]==$name[$j]) {
                    $iname = strval($person[$i][0]);
                    $password = strval($person[$i][1]);
                    $email = $person[$i][2];
                    $privilege = intval($person[$i][3]);
                    $postemail[$index]=$email;
                    $index++;

                    $sql_1 = "INSERT INTO tb_e_account (Account_Name,Account_Password ,Account_Privilege,Account_Email)
                   VALUES ('$iname' ,'$password', $privilege,'$email')";
                    if (mysqli_query($con, $sql_1))
                    {
                        echo "<script>alert('注册信息录入成功');</script>";

                      //  echo "<script>location.href='homeTest.php';</script>";
                    }
                    else
                    {
                        echo "Error: " . $sql_1 . "<br>" . mysqli_error($con);
                    }
                    mysqli_query($con,"DELETE FROM tb_e_account_temporarily WHERE username='$iname'");
                }
            }
        }
        mysqli_close($con);
        //echo json_encode($postemail);
        for($i=0;$i<count($postemail);$i++)
        {
            $to =$postemail[$i];
            $now = date("Y-m-d");
            $from_name = '血吸虫病管理系统';
            $from_email = '管理员';
            $headers = "From: $from_name <$from_email>";
            $body ="尊敬的用户，您好,您的申请信息已经通过，请及时登录验证";
            $subject = "[$now] 注册成功";
            $success=mail($to, $subject, $body, $headers);
        }
        echo "<script>alert('邮件已成功发送到相应账户');</script>";
        echo "<script>location.href='personrequests.php';</script>";
//        $to =$email;
//        $now = date("Y-m-d");
//        $from_name = '血吸虫病管理系统';
//        $from_email = '管理员';
//        $headers = "From: $from_name <$from_email>";
//        $body ="尊敬的用户，您好,您的申请信息已经通过，请及时登录验证";
//        $subject = "[$now] 注册成功";
//        $success=mail($to, $subject, $body, $headers);
//

    }
?>