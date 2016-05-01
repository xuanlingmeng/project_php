<?php
header('Content-Type:text/html;charset=utf-8');

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "bloodworm_db";
$number=array();
//$message=0;
//$array=array();
//滩情 tb_his_beachsituation
//$message_1=0;
//$message_2=0;
//$message_3=0;
//$message_4=0;
//$message_5=0;
//$message_6=0;
$message=array();
$Environment_Id = $_POST["envirID"];
$envirName = $_POST["envirName"];
$Beach_BelongToCountry= $_POST["addressBel"];
$BeachType = $_POST["envirType"];
$PlantType=$_POST["planttype"];//植被种类
$Height=$_POST["beachHeight"];//滩面高程

//滩情变化 tb_his_beachchanges
$SludgeLandfill_Year=$_POST["xiyuYear"];

//历史螺情 tb_his_snailsituation_history
$FirsSnailYear=$_POST["firstluoYear"];

//相关疫情 tb_his_epidemic
$LivestockGrazing_YesNo=$_POST["hasLivestock"];

//暨往灭螺 tb_his_eliminate
$Medicine_Method=$_POST["yaowuMethod"];
// 创建链接
//$message=["$Environment_Id","$envirName","$Beach_BelongToCountry","$BeachType","$PlantType","$Height"];
$message=[$Environment_Id,$envirName,$Beach_BelongToCountry,$BeachType,$PlantType,$Height];
$conn = mysqli_connect($servername, $username, $password, $dbname);
// 检查链接
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$sql="SELECT Environment_Id FROM tb_his_beachsituation ";
$result=mysqli_query($conn,$sql);
while($row=mysqli_fetch_array($result,MYSQLI_NUM))
{
    $number[]=$row;
}
//in_array(value,array,type)


$isin = in_array(["$Environment_Id"],$number);
if($isin) {
    echo "<script>if(confirm('环境编号已经存在，是否更新？')){location.href='envir_message.php?message=$Environment_Id,$envirName,$Beach_BelongToCountry,$BeachType,$PlantType,$Height';}else{alert('保存原有录入信息');}</script>";

 }

 else
 {
     $sql_1 = "INSERT INTO tb_his_beachsituation (Environment_Id,envirName ,Beach_BelongToCounty,BeachType,PlantType,Height)
     VALUES ('$Environment_Id','$envirName', '$Beach_BelongToCountry','$BeachType','$PlantType',$Height)";
    echo($SludgeLandfill_Year) ;
     if (mysqli_query($conn, $sql_1))
     {
         echo "<script>alert('环境信息录入成功');</script>";
     }
     else
     {
         echo "Error: " . $sql_1 . "<br>" . mysqli_error($conn);
     }

 }
mysqli_close($conn);
//echo "<script>location.href='nowtask.php';</script>";*/
?>






































