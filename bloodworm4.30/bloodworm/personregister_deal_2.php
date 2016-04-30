<?php
    session_start();
    header('Content-Type:text/html;charset=utf-8');
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "bloodworm_db";

    $user =$_POST["username"];
    $name = $_POST["name"];
    $field = $_POST["field"];
    $sex = $_POST["sex"];
    $birthday = $_POST["birthday"];
    $mobilephone = $_POST["mobilephone"];
    $number=array();
    $yanzheng= $_SESSION["name"];



    if($yanzheng==$user)
    {
        //创建链接
        $conn = mysqli_connect($servername, $username, $password, $dbname);
    // 检查链接
        if (!$conn) {
            die("Connection failed: " . mysqli_connect_error());
        }

        $sql_1="SELECT Person_username FROM tb_e_person";
        $result=mysqli_query($conn,$sql_1);
        while($row=mysqli_fetch_array($result,MYSQLI_NUM))
        {
            $number[]=$row;
        }

        $isin = in_array(["$user"],$number);
        if($isin) {
            echo "<script>if(confirm('用户信息已录入，是否更新？')){location.href='PersonRegister_update.php?message=$user,$name,$field,$sex,$mobilephone';}else{alert('保存原有录入信息'); location.href='PersonRegister.php';}</script>";
        }
        else
        {
            $sql = "INSERT INTO tb_e_person (Person_username,Person_Name,Person_Sex,Person_field,Person_MobilePhone)
    VALUES ('$user','$name','$sex','$field','$mobilephone')";

            if (mysqli_query($conn, $sql)) {
                echo "<script>alert('信息完善成功！');</script>";
                echo "<script>location.href='persontable.php';</script>";
            } else {
                echo "Error: " . $sql . "<br>" . mysqli_error($conn);
            }

            mysqli_close($conn);
            // echo "<script>location.href='persontable.php';</script>";
        }
    }

    else
    {
        echo "<script>alert('用户名应与登录用户名一致！');</script>";
        echo "<script>location.href='PersonRegister.php';</script>";
    }
?>








































































