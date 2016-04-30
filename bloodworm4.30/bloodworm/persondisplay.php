<?php

    $con=mysqli_connect("localhost","root","","bloodworm_db");
    $index=0;
    // Check connection
    if (mysqli_connect_errno())
    {
        echo "Failed to connect to MySQL: " . mysqli_connect_error();
    }

    $result = mysqli_query($con,"SELECT * FROM tb_e_account
    WHERE Account_Privilege=1");

    while($row = mysqli_fetch_array($result))
    {

        $person=$row['Account_Name'];
       // $index++;
    }

//$result = mysqli_query($con,"SELECT Account_Name FROM tb_e_account   WHERE Account_Privilege=1");
//
echo json_encode($person);

?>