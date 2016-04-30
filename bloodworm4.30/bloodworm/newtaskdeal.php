<?php
header('Content-Type:text/html;charset=utf-8');
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "bloodworm_db";

$Task_Id = $_POST["haoma"];
$Environment_Id = $_POST["hjID"];
$chaluo = $_POST["need"];
$wltype = $_POST["wltype"];
$form_field = $_POST["form-field"];
$person = $_POST["form-field-9"];
//
//$circle_=$_POST["circle"];
$index=0;
$area=$_POST["mianji"];
$tasktype=$_POST["enmer"];
$time=$_POST["id-date-picker-1"];
//$radius = floatval ($_POST['circle']);

$arr = explode("=", $_POST["circle"]);
// echo json_encode($arr);
foreach ($arr as $u) {
    $strarr = explode("R", $u);
    foreach ($strarr as $newstr) {

        $location[$index] = $newstr;
        $index++;
        //  echo $newstr . "</br>";
    }
}
$radius=$location[count($location)-1];
$radius=floatval($radius);

if($wltype==1)
{
    $radius=0;
}





// 创建链接
$conn = mysqli_connect($servername, $username, $password, $dbname);
// 检查链接
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}


//$sql = "INSERT INTO tb_wlo(Task_Id,longitude_latitude,wltype,radius)
//VALUES( $Task_Id,$form_field,$wltype,$radius)";
$sql = "INSERT INTO tb_wlo_ (Task_Id,longitude_latitude,wltype,radius)
VALUES ('$Task_Id','$form_field', '$wltype','$radius')";

/*$sql_1="INSERT INTO tb_wlo (Environment_Id,Task_Id,Type_WL,Area,ExaOrEli,Eliminateperson,Examineperson,le,TaskTime)
VALUES ('".$Environment_Id."','$Task_Id','$wltype','$area','$chaluo','$person','$person', '$tasktype','$time')";*/
    $sql_1="INSERT INTO tb_e_task (Environment_Id,Task_Id,Type_WL,Area,ExaOrEli,Eliminateperson,Examineperson,le,TaskTime)
VALUES ('$Environment_Id','$Task_Id',$wltype,'$area',$chaluo,'$person','$person', '$tasktype','$time')";


if (mysqli_query($conn, $sql)) {

} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

if (mysqli_query($conn, $sql_1)) {
    echo "<script>alert('任务建立成功！');</script>";
    echo "<script>location.href='nowtask.php';</script>";
} else {
    echo "Error: " . $sql_1 . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
//echo "<script>location.href='nowtask.php';</script>";
?>






































