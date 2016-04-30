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


//echo $wltype;
//echo $area.'</br>';
//print_r($circle);
//var_dump($_POST['circle']);

/*任务编号id="haoma"
环境编号id="hjID"
是否需要查螺 需要id="need"   不需要id="noneed"  (bit 0,1)
围栏类型  select name="wltype"
圈定围栏  id="form-field"
查/灭螺负责人员 id="form-field-9"
任务紧急程度  select name="enmer"   （int1,2,3）
任务建立时间  id="id-date-picker-1"
*/
/*if($radius_>0)
{
    $radius=$radius_;
}
else
{
    $radius=0;
}

$index=0;
$index1=0;
$index2=0;
$arr = explode("|",$form_field);
foreach($arr as $u)
{
    $strarr = explode(",", $u);
    foreach ($strarr as $newstr)
    {
        $location[$index]=$newstr;
        $index++;
        echo $newstr . "</br>";
    }
}

$length=count($location);


for($index=0;$index<$length-1;)
{
    $longitude[$index1]=  $location[$index];
    $index++;
    $index1++;

    $latitude[$index2]=  $location[$index];
    $index++;
    $index2++;
}

//$length1=count( $longitude);
//$length2=count( $latitude);

for($number=0;$number<count( $longitude);$number++)
{
    $longitude[$number]=floatval( $longitude[$number]);
    echo $longitude[$number];
    echo "</br>";

}

for($number=0;$number<count( $latitude);$number++)
{
    $latitude[$number]=floatval( $latitude[$number]);
    echo $latitude[$number];
    echo "</br>";
}*/



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
echo $wltype;
    $sql_1="INSERT INTO tb_e_task (Environment_Id,Task_Id,Type_WL,Area,ExaOrEli,Eliminateperson,Examineperson,le,TaskTime)
VALUES ('$Environment_Id','$Task_Id',$wltype,'$area',$chaluo,'$person','$person', '$tasktype','$time')";
    echo $wltype;




if (mysqli_query($conn, $sql)) {
    echo "<script>alert('信息录入成功');</script>";
    echo "<script>location.href='nowtask.php';</script>";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($con);
}
mysqli_close($conn);
//echo "<script>location.href='nowtask.php';</script>";
?>






































