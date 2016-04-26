<?php
//<script src="http://code.jquery.com/jquery-latest.js"></script>
    $data=array();
    $person=array();
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
        for($index=0;$index<count($name);$index++)
        {
            echo $name[$index];echo "</br>";
        }
        $sql="SELECT username,password,email,privilege FROM tb_e_account_temporarily ";
        $result=mysqli_query($con,$sql);
        while($row=mysqli_fetch_array($result,MYSQLI_NUM))
        {
            $person[]=$row;
        }

         for($i=0;$i<count($person);$i++)
        {
            for($j=0;$j<count($name);$j++)
            {
                if($person[$i][0]==$name[$j])
                {
                    $name=strval($person[$i][0]);
                    $password=strval($person[$i][1]);
                    $email=strval($person[$i][2]);
                    $privilege=intval($person[$i][3]);

                    $sql_1 = "INSERT INTO tb_e_account (Account_Name,Account_Password ,Account_Privilege,Account_Email)
                   VALUES ('$name' ,'$password', $privilege,'$email')";
                    if (mysqli_query($con, $sql_1))
                    {
                        echo "<script>alert('注册信息录入成功');</script>";
                        echo "<script>location.href='homeTest.php';</script>";
                    }
                    else
                    {
                        echo "Error: " . $sql_1 . "<br>" . mysqli_error($con);
                    }
                    mysqli_query($con,"DELETE FROM tb_e_account_temporarily WHERE username='$name'");
                }
            }
        }

        mysqli_close($con);
    }
?>