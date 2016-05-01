<?php
session_start();
$name=$_SESSION['name'];
$privilege=$_SESSION['privilege'];
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
if (mysqli_connect_errno())
{
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
}
$sql_update="SELECT Task_Id FROM tb_e_task WHERE ExaOrEli=0";
$res=mysqli_query($conn,$sql_update);
while($row=mysqli_fetch_array($res,MYSQLI_NUM))
{
    $number[]=$row;
}
//echo json_encode($number);
$isin = in_array(["$Task_Id"],$number);
if($isin) {
    $sql_update_1="SELECT Examineperson FROM tb_e_task WHERE Task_Id='$Task_Id'";
    $res_1=mysqli_query($conn,$sql_update_1);
    while($row=mysqli_fetch_array($res_1,MYSQLI_NUM))
    {
        $number=$row;
    }
   // echo json_encode($number[0]) ;
    if($privilege==1 and $number[0]!="$name")
    {
        echo "<script>alert('您输入的任务编号与您接受的查螺任务编号不一致,请重新输入！');</script>";
        echo "<script>location.href='nowsnail.php';</script>";
    }
    else
    {
        $sql = "INSERT INTO tb_e_examinesnail (Task_Id,Investigation_Method,Investigation_Area,SnailArea,ExamineBox,SnailBox,SumSnail,LivingSnailBox,LivingSnail,LastInspectionTime)
VALUES ('$Task_Id',$Investigation_Method,$Investigation_Area,$SnailArea,$ExamineBox,$SnailBox,$SumSnail,$LivingSnailBox,$LivingSnail,'$LastInspectionTime')";
        if (mysqli_query($conn, $sql)) {
            echo "<script>alert('现场查螺信息录入成功');</script>";
            echo "<script>location.href='donetask.php';</script>";
        } else {
            echo "Error: " . $sql . "<br>" . mysqli_error($conn);
        }

    }

    mysqli_close($conn);
}
else{
    echo "<script>alert('任务编号输入有误，请核对！');</script>";
    echo "<script>location.href='nowsnail.php';</script>";
    mysqli_close($conn);
}



?>






































