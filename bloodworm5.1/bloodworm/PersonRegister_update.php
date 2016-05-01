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
$message[3]=intval($message[3]);
$conn = mysqli_connect($servername, $username, $password, $dbname);
// 检查链接
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
$sql_1=mysqli_query($conn,"UPDATE tb_e_person SET Person_Name='$message[1]',Person_field='$message[2]',Person_Sex=$message[3],Person_MobilePhone='$message[4]'
WHERE Person_username='$message[0]'");

echo "<script>alert('信息更新成功');</script>";
echo "<script>location.href='persontable.php';</script>";
//mysqli_close($conn);
//echo "<script>location.href='nowtask.php';</script>";*/
?>






































