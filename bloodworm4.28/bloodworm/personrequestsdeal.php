<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "bloodworm_db";
    $conn = new mysqli($servername, $username, $password, $dbname);
    class person
    {
        Public $username;
        Public $email;
        Public $privilege;
        Public $long;
    };

    $person_requests=new person();
    $array_request=array();
    //$location=array();
    //$result=$conn->query("select wltype,Task_Id from tb_wlo");
    $sql="SELECT username,email,privilege FROM tb_e_account_temporarily ";
    $result=mysqli_query($conn,$sql);
    while($row=mysqli_fetch_array($result,MYSQLI_NUM))
    {
        $array_requests[]=$row;
    }

//    for($j=0;$j<count($array_requests);$j++)
//    {
//        if (empty( $array_requests[$j][0]))
//        {
//            $array_requests[$j][0] = "NULL";
//        }
//        if (empty( $array_requests[$j][1]))
//        {
//            $array_requests[$j][1] = "NULL";
//        }
//        if (empty( $array_requests[$j][2]))
//        {
//            $array_requests[$j][2] = "NULL";
//        }
//    }

    for($i=0;$i<count($array_requests);$i++)
    {
        $person_requests->username[$i]=$array_requests[$i][0];
        $person_requests->email[$i]=$array_requests[$i][1];
        $person_requests->privilege[$i]=$array_requests[$i][2];
    }
    $person_requests->long=count( $array_requests);

    for($i=0;$i<count( $array_requests);$i++)
    {
        if ($person_requests->privilege[$i] == "1")
        {
            $person_requests->privilege[$i] = "查灭螺人员";
        }
        else if ($person_requests->privilege[$i] == "2")
        {
            $person_requests->privilege[$i] = "普通管理员";
        }
        else if ($person_requests->privilege[$i] == "3")
        {
            $person_requests->privilege[$i] = "实验室人员";
        }
        else
        {
            $person_requests->privilege[$i] = "终极管理员";
        }

    }
    echo json_encode($person_requests);

    ?>

