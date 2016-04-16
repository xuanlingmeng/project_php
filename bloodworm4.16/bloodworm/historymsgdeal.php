<?php
header('Content-Type:text/html;charset=utf-8');
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "bloodworm_db";

//滩情 tb_his_beachsituation
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
$conn = mysqli_connect($servername, $username, $password, $dbname);
// 检查链接
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}


//$sql = "INSERT INTO tb_wlo(Task_Id,longitude_latitude,wltype,radius)
//VALUES( $Task_Id,$form_field,$wltype,$radius)";
$sql_1 = "INSERT INTO tb_his_beachsituation (Environment_Id,envirName ,Beach_BelongToCounty,BeachType,PlantType,Height)
VALUES ('$Environment_Id ','$envirName', '$Beach_BelongToCountry','$BeachType','$PlantType',$Height)";
//$sql = "INSERT INTO tb_his_beachsituationsum (Environment_Id,envirName ,Beach_BelongToCounty,BeachType)
//VALUES ('$Environment_Id ','$Name', '$Beach_BelongToCountry','$BeachType')";
//$sql_2 = "INSERT INTO tb_his_beachchanges (SludgeLandfill_Year)
//VALUES ('$SludgeLandfill_Year')";

//$sql_3 = "INSERT INTO tb_his_snailsituation_history (FirsSnailYear)
//VALUES ('$FirsSnailYear')";

//$sql_4 = "INSERT INTO tb_his_epidemic (LivestockGrazing_YesNo)
//VALUES ('$LivestockGrazing_YesNo')";

//$sql_5 = "INSERT INTO tb_his_eliminate (Medicine_Method)
//VALUES ('$Medicine_Method')";

//$sql = "INSERT INTO tb_his_beachsituationsum (Environment_Id,envirName ,Beach_BelongToCounty,BeachType)
//VALUES ('$Environment_Id ','$Name', '$Beach_BelongToCountry','$BeachType')";

if (mysqli_query($conn, $sql_1)) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql_1 . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
//echo "<script>location.href='nowtask.php';</script>";*/
?>






































