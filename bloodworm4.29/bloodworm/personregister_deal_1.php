<?php
    session_start();
    $name= $_SESSION["name"];    //输出 登记的用户名为：nostop
    $con=mysqli_connect("localhost","root","","bloodworm_db");
    $index=0;
    $person=array();
    // Check connection
    if (mysqli_connect_errno())
    {
        echo "Failed to connect to MySQL: " . mysqli_connect_error();
    }

    $result = mysqli_query($con,"SELECT * FROM tb_e_account
    WHERE Account_Name='$name'");

    while($row = mysqli_fetch_array($result))
    {
        // echo $row['Account_Name'] ;
        //echo "<br>";
        $privilege[$index]=$row['Account_Privilege'];
        $index++;

    }
   // $privilege=intval($privilege);
    $level=$privilege;
    if($privilege==["1"])
    {
    $privilege="查灭螺人员";
    }
    if ($privilege==["2"])
    {
        $privilege="普通管理员";
    }
    else if ($privilege==["3"])
    {
        $privilege="实验室人员";
    }
    else if ($privilege==["4"])
    {
        $privilege="终极管理员";
    }

    $person=[$level,$privilege];
    echo json_encode( $person);
?>
