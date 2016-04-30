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

$BeachSituation_Id=intval($message[0]);
$BeachChanges_SludgeLandfill=intval($message[1]);
$SnailSituation_Id=intval($message[2]);
$Epidemic_Id=intval($message[3]);
$Eliminate_Id=intval($message[4]);
$Environment_Id=$message[5];
$envirName=$message[6];
$Beach_BelongToCounty=$message[7];
$BeachType=intval($message[8]);
$PlantType=$message[9];
$Height=floatval($message[10]);
$SludgeLandfill_Year=intval($message[11]);
$FirsSnailYear=intval($message[12]);
$LivestockGrazing_YesNo=intval($message[13]);
$Medicine_Method=intval($message[14]);

$conn = mysqli_connect($servername, $username, $password, $dbname);
// 检查链接
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

//echo $Environment_Id;
$sql_1=mysqli_query($conn,"UPDATE tb_his_beachsituation SET PlantType='$PlantType',Height=$Height
WHERE _Id=$BeachSituation_Id");
$sql_2=mysqli_query($conn,"UPDATE tb_his_beachchanges  SET SludgeLandfill_Year=$SludgeLandfill_Year
WHERE _Id=$BeachChanges_SludgeLandfill");
$sql_3=mysqli_query($conn,"UPDATE tb_his_snailsituation_history SET FirsSnailYear=$FirsSnailYear
WHERE _Id=$SnailSituation_Id");
$sql_4=mysqli_query($conn,"UPDATE tb_his_epidemic SET LivestockGrazing_YesNo=$LivestockGrazing_YesNo
WHERE _Id=$Epidemic_Id");
$sql_5=mysqli_query($conn,"UPDATE tb_his_eliminate SET Medicine_Method=$Medicine_Method
WHERE _Id=$Eliminate_Id");

$sql=mysqli_query($conn,"UPDATE tb_his_beachsituationsum SET envirName='$envirName',Beach_BelongToCounty='$Beach_BelongToCounty',BeachType=$BeachType
WHERE Environment_Id='$Environment_Id'");

//$sql=mysqli_query($conn,"UPDATE tb_his_beachsituationsum SET envirName='$envirName',Beach_BelongToCounty='$Beach_BelongToCounty',BeachType=$BeachType
//WHERE Environment_Id='$Environment_Id'");

//$sql=mysqli_query($conn,"UPDATE tb_his_beachsituationsum SET envirName='$message[6]',Beach_BelongToCounty='$message[7]',BeachType=$BeachType
//WHERE Environment_Id='$message[5]'");
echo "<script>alert('环境信息更新成功');</script>";
echo "<script>location.href='eliminate.php';</script>";


?>





































