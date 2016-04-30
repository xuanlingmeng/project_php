<?php
header('Content-Type:text/html;charset=utf-8');
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "bloodworm_db";

$Task_Id = $_POST["taskid"];
$Investigation_Method = $_POST["Investigation_Method"];
$Investigation_Area = $_POST["EnvirArea"];
$SnailArea = $_POST["SnailArea"];
$ExamineBox = $_POST["ExamineBox"];
$SnailBox = $_POST["SnailBox"];
$SumSnail = $_POST["SnailSum"];
$LivingSnailBox = $_POST["LivingSnailBox"];
$LivingSnail = $_POST["LivingSnail"];
$LastInspectionTime = $_POST["time"];

// 创建链接
$conn = mysqli_connect($servername, $username, $password, $dbname);
// 检查链接
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
$sql = "INSERT INTO tb_e_examinesnail (Task_Id,Investigation_Method,Investigation_Area,SnailArea,ExamineBox,SnailBox,SumSnail,LivingSnailBox,LivingSnail,LastInspectionTime)
VALUES ('$Task_Id',$Investigation_Method,$Investigation_Area,$SnailArea,$ExamineBox,$SnailBox,$SumSnail,$LivingSnailBox,$LivingSnail,'$LastInspectionTime')";
if (mysqli_query($conn, $sql)) {
    echo "<script>alert('现场查螺信息录入成功');</script>";
    echo "<script>location.href='donetask.php';</script>";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);



?>






































