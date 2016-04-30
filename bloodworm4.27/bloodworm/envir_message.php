<?php
header('Content-Type:text/html;charset=utf-8');
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "bloodworm_db";

$data=$_GET['message'];
$message = explode(',',$data);

for($index=0;$index<count($message);$index++)
{
    echo $message[$index];echo "</br>";
}
$message[5] = floatval($message[5]);
$message[3]=intval($message[3]);
var_dump($message[0]);
$conn = mysqli_connect($servername, $username, $password, $dbname);
// 检查链接
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
$sql_1=mysqli_query($conn,"UPDATE tb_his_beachsituation SET envirName='$message[1]',Beach_BelongToCounty='$message[2]',BeachType=$message[3],PlantType='$message[4]',Height=$message[5]
WHERE Environment_Id='$message[0]'");

echo "<script>alert('信息更新成功');</script>";
echo "<script>location.href='eliminate.php';</script>";
//mysqli_close($conn);
//echo "<script>location.href='nowtask.php';</script>";*/
?>






































