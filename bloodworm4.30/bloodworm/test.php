<?php
header('Content-Type:text/html;charset=utf-8');

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "bloodworm_db";
$array_sum=array();

$array_Acuteinfection=[0, 0.59, 0.43, 0.32, 0.17];
$array_infectedwater=[0, 0.51, 0.38, 0.28, 0.14];
$array_activities=[0, 0.15, 0.18, 0.26, 0.20];
$array_risky=[0, 0.10, 0.19, 0.20, 0.14];
$array_river=[0, 0.08, 0.11, 0.16, 0.18];
$array_temperature=[0, 0.05, 0.08, 0.10, 0.10];
$R=array();
class RiskIndex
{
    Public $Environment_Id;
    Public $Task_Id;
    Public $EnvirName;
    Public $person;
    Public $RiskIndex;
    Public $Color_WL;
    Public $long;

    Public $snail_Id;
    Public $SnailIS_LivingSnailAVGDensity;//活螺平均密度
    Public $SnailIS_InfectiousSchistosomaAVGDensity;//感染螺密度
    Public $SnailIS_SchistosomaInfection;//钉螺感染率
    Public $SnailIS_SnailArea; //钉螺面积

    Public $infectionreason_Id;
    Public $AcuteInfections;//急性感染
    Public $DeterminationOfContaminatedWater;//疫水测定
    Public $StoolDensity; //StoolDensity 野粪密度
    Public $StoolRatio;//野粪阳性率

    Public $reason_Id;
    Public $CrowdActivities;
    Public $RiskProject;
    Public $RiverFlood;
    Public $LocalTemperature;
};
$con=mysqli_connect("localhost","root","","bloodworm_db");
$risk=new RiskIndex();
$sql="SELECT Environment_Id,Task_Id,snail_Id,infectionreason_Id,reason_Id FROM tb_is_sum ";
$result=mysqli_query($con,$sql);
while($row=mysqli_fetch_array($result,MYSQLI_NUM))
{
    $array_sum[]=$row;
}
for($i=0;$i<count($array_sum);$i++)
{
    $risk->Environment_Id[$i]=$array_sum[$i][0];
    $risk->Task_Id[$i]=$array_sum[$i][1];
    $risk->snail_Id[$i]=$array_sum[$i][2];
    $risk->infectionreason_Id[$i]=$array_sum[$i][3];
    $risk->reason_Id[$i]=$array_sum[$i][4];
}

for($i=0;$i<count($array_sum);$i++)
{
    $snail=intval($risk->snail_Id[$i]);
    $result_1 = mysqli_query($con,"SELECT * FROM tb_is_snail
    WHERE _id=$snail");
    while($row = mysqli_fetch_array($result_1))
    {
        $risk->SnailIS_LivingSnailAVGDensity[$i]= $row['SnailIS_LivingSnailAVGDensity'];
        $risk->SnailIS_InfectiousSchistosomaAVGDensity[$i]= $row['SnailIS_InfectiousSchistosomaAVGDensity'];
        $risk->SnailIS_SchistosomaInfection[$i]= $row['SnailIS_SchistosomaInfection'];
        $risk->SnailIS_SnailArea[$i]= $row['SnailIS_SnailArea'];
    }


    $infection=intval($risk->infectionreason_Id[$i]);
    $result_2 = mysqli_query($con,"SELECT * FROM tb_is_infectionreason
    WHERE _id=$infection");
    while($row = mysqli_fetch_array($result_2))
    {
        $risk->AcuteInfections[$i]= $row['AcuteInfections'];
        $risk->DeterminationOfContaminatedWater[$i]= $row['DeterminationOfContaminatedWater'];
        $risk->StoolDensity[$i]= $row['StoolDensity'];
        $risk->StoolRatio[$i]= $row['StoolRatio'];
    }

    $reason=intval($risk->reason_Id[$i]);
    $result_3 = mysqli_query($con,"SELECT * FROM tb_is_reason
    WHERE _id=$reason");
    while($row = mysqli_fetch_array($result_3))
    {
        $risk->CrowdActivities[$i]= $row['CrowdActivities'];
        $risk->RiskProject[$i]= $row['RiskProject'];
        $risk->RiverFlood[$i]= $row['RiverFlood'];
        $risk->LocalTemperature[$i]= $row['LocalTemperature'];
    }

    $task=strval($risk->Task_Id[$i]);
    $result_4 = mysqli_query($con,"SELECT * FROM tb_e_task
    WHERE Task_Id=$task");
    while($row = mysqli_fetch_array($result_4))
    {
        $risk->person[$i]= $row['Examineperson'];

    }

    $envirID=strval($risk->Environment_Id[$i]);
    $result_5 = mysqli_query($con,"SELECT * FROM tb_his_beachsituationsum
    WHERE Environment_Id=$envirID");
    while($row = mysqli_fetch_array($result_5))
    {
        $risk->EnvirName[$i]= $row['envirName'];

    }
    if (empty($risk->EnvirName[$i]))
    {
        $risk->EnvirName[$i] = "未填写";
    }
}

for($i=0;$i<count($array_sum);$i++)
{
    if($risk->AcuteInfections!=0 or $risk->DeterminationOfContaminatedWater!=0)
    {
        $R[$i]=3;
    }
    else if($risk->SnailIS_SchistosomaInfection!=0 or $risk->StoolRatio!=0)
    {
        $R[$i]=2;
    }
    else
    {
        $R[$i]=1;
    }
}

for($i=0;$i<count($array_sum);$i++)
{
    $risk->SnailIS_SchistosomaInfection[$i]=e11( $risk->SnailIS_SchistosomaInfection[$i]);
    $risk->SnailIS_InfectiousSchistosomaAVGDensity[$i]=e12( $risk->SnailIS_InfectiousSchistosomaAVGDensity[$i]);
    $risk->SnailIS_SnailArea[$i]=e13($risk->SnailIS_SnailArea[$i]);
    $risk->SnailIS_LivingSnailAVGDensity[$i]=e14($risk->SnailIS_LivingSnailAVGDensity[$i]);
    $risk->AcuteInfections[$i]=$array_Acuteinfection[$risk->AcuteInfections[$i]];
    $risk->DeterminationOfContaminatedWater[$i]=$array_infectedwater[ $risk->DeterminationOfContaminatedWater[$i]];
    $risk->StoolDensity[$i]=e23( $risk->StoolDensity[$i]);
    $risk->StoolRatio[$i]=e24($risk->StoolRatio[$i]);
    $risk->CrowdActivities[$i]=$array_activities[ $risk->CrowdActivities[$i]];
    $risk->RiskProject[$i]=$array_risky[$risk->RiskProject[$i]];
    $risk->RiverFlood[$i]=$array_river[$risk->RiverFlood[$i]];
    $risk->LocalTemperature[$i]=$array_temperature[$risk->LocalTemperature[$i]];
    $risk->RiskIndex[$i]=( $risk->SnailIS_SchistosomaInfection[$i]+$risk->SnailIS_InfectiousSchistosomaAVGDensity[$i]+ $risk->SnailIS_SnailArea[$i]
        +$risk->SnailIS_LivingSnailAVGDensity[$i]+ $risk->AcuteInfections[$i]+ $risk->DeterminationOfContaminatedWater[$i]+ $risk->StoolDensity[$i]
    +$risk->CrowdActivities[$i]+$risk->RiskProject[$i]+ $risk->RiverFlood[$i]+$risk->LocalTemperature[$i])*$R[$i];

    if($risk->RiskIndex[$i]<0.9) {$risk->Color_WL[$i]="红色";}
    else if($risk->RiskIndex[$i]<1.5) {$risk->Color_WL="橙色";}
    else if ($risk->RiskIndex[$i]<2.0) {$risk->Color_WL="黄色";}
    else {$risk->Color_WL="白色";}
}

function e11($temp)
{
   $e11= $temp >= 10 ? 0.64 : ($temp >= 5 ? 0.55 : ($temp >= 1 ? 0.42 : 0.20));
    return($e11);
}
function e12($temp)
{
    $e12 = $temp >= 0.10 ? 0.67 : ($temp >= 0.05 ? 0.56 : ($temp >= 0.001 ? 0.39 : 0.22));
    return($e12);
}

function e13($temp)
{
    $e13 = $temp >= 10000 ? 0.35 : ($temp >= 1000 ? 0.27 : ($temp >= 50 ? 0.19 : 0.15));
    return($e13);
}
function e14($temp)
{
    $e14 = $temp >= 20 ? 0.45 : ($temp >= 10 ? 0.40 : ($temp >= 0.07 ? 0.27 : 0.17));
    return($e14);
}

function e23($temp)
{
    $e23 = $temp >= 0.5 ? 0.64 : ($temp >= 0.1 ? 0.54 : ($temp >= 0.01 ? 0.36 : 0.22));
    return($e23);
}

function e24($temp)
{
    $e24 = $temp >= 10 ? 0.60 : ($temp >= 5? 0.53 : ($temp >=1 ? 0.41 : 0.22));
    return($e24);
}

//$name=[1,2,5,10];
//for($i=0;$i<count($name);$i++)
//{
//    $e11[$i]=e11($name[$i]);
//}
echo json_encode($risk);
//$risk->long=count($array_sum);
?>




































