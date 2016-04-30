<?php
header('Content-Type:text/html;charset=utf-8');
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "bloodworm_db";

$Task_Id = $_POST["taskid"];
/*$array_newtask=array();*/

// 创建链接
$conn = mysqli_connect($servername, $username, $password, $dbname);
// 检查链接
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
$sql = "INSERT INTO tb_e_examinesnail (Task_Id)
VALUES ('$Task_Id')";
if (mysqli_query($conn, $sql)) {
    echo "<script>alert('信息录入成功');</script>";
    echo "<script>location.href='donetask.php';</script>";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);


//$sql = "INSERT INTO tb_wlo(Task_Id,longitude_latitude,wltype,radius)
//VALUES( $Task_Id,$form_field,$wltype,$radius)";
//$sql = "INSERT INTO tb_e_eliminatesnail (Task_Id)
//VALUES ('$Task_Id')";
/*$sql_1="INSERT INTO tb_wlo (Environment_Id,Task_Id,Type_WL,Area,ExaOrEli,Eliminateperson,Examineperson,le,TaskTime)
VALUES ('".$Environment_Id."','$Task_Id','$wltype','$area','$chaluo','$person','$person', '$tasktype','$time')";

if (mysqli_query($conn, $sql_1)) {
    echo "New record1 created successfully";
} else {
    echo "Error: " . $sql_1 . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
//echo "<script>location.href='nowtask.php';</script>";
?>






































