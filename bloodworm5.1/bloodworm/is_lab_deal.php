<?php
    $number=array();
//tb_is_snail
    $Task_Id=$_POST["taskid"];
    $InfectionSnail=$_POST["InfectionSnail"]; //阳性螺数
    $InfectionBox=$_POST["InfectionBox"];  //阳性螺框数
    $InfectionArea=$_POST["InfectionArea"]; //感染钉螺面积

//tb_is_infectionsnail
    $StoolSum=$_POST["StoolSum"];//野粪总份数
    $StoolSnail=$_POST["StoolSnail"];//血吸虫
    $AcuteInfections=$_POST["AcuteInfections"];//急性感染
    $DeterminationOfContaminatedWater=$_POST["DeterminationOfContaminatedWater"];//疫水测定

//tb_is_reason
    $CrowdActivities=$_POST["CrowdActivities"];
    $RiskProject=$_POST["RiskProject"];
    $RiverFlood=$_POST["RiverFlood"];
    $LocalTemperature=$_POST["LocalTemperature"];


//SnailIS_LivingSnailAVGDensity 活螺平均密度  活螺框数/有螺总框数
//SnailIS_InfectiousSchistosomaAVGDensity 感染性钉螺平均密度   阳性螺框数/总框数
//SnailIS_SchistosomaInfection 钉螺感染率  阳性螺数/总螺数
//SnailIS_SnailArea  钉螺面积

//StoolDensity 野粪密度  野粪总数/环境面积*100
//StoolRatio 野粪阳性率  野粪中检测出血吸虫数量/总粪数

//tb_e_examinesnail
//有螺总面积：SnailArea    活螺框数：LivingSnailBox  有螺框数：SnailBox  调查框数：ExamineBox   调查面积：Investigation_Area   捕获总螺数：SumSnail 活螺总数：LivingSnail


    $con=mysqli_connect("localhost","root","","bloodworm_db");
    if (mysqli_connect_errno())
    {
        echo "Failed to connect to MySQL: " . mysqli_connect_error();
    }
    $sql_update="SELECT Task_Id FROM tb_e_examinesnail ";
    $res=mysqli_query($con,$sql_update);
    while($row=mysqli_fetch_array($res,MYSQLI_NUM))
    {
    $number[]=$row;
    }
    $isin = in_array(["$Task_Id"],$number);
    if($isin) {
        $result = mysqli_query($con, "SELECT * FROM tb_e_examinesnail
        WHERE Task_Id='$Task_Id'");

        while ($row = mysqli_fetch_array($result)) {
            $SnailArea = $row['SnailArea'];
            $LivingSnailBox = $row['LivingSnailBox'];
            $LivingSnail = $row['LivingSnail'];
            $SnailBox = $row['SnailBox'];
            $ExamineBox = $row['ExamineBox'];
            $Investigation_Area = $row['Investigation_Area'];
            $SumSnail = $row['SumSnail'];
        }



        $SnailIS_SnailArea = $SnailArea; //有螺总面积
        //  $StoolDensity= $StoolSum/ $Investigation_Area*100;
   //     $StoolDensity = $StoolSum / 100;//野粪密度

        if($SnailBox==0)
        {
            $SnailIS_LivingSnailAVGDensity=0;
            $SnailIS_InfectiousSchistosomaAVGDensity =0;
        }
        else
        {
            $SnailIS_LivingSnailAVGDensity = $LivingSnailBox / $SnailBox; //活螺平均密度
            $SnailIS_InfectiousSchistosomaAVGDensity = $InfectionBox / $SnailBox; //感染性钉螺平均密度
        }

        if($LivingSnail==0)
        {
            $SnailIS_SchistosomaInfection=0;
        }
        else
        {
            $SnailIS_SchistosomaInfection = $InfectionSnail / $LivingSnail * 100; //钉螺感染率
        }
        if($StoolSum==0)
        {
            $StoolDensity =0;
            $StoolRatio=0;
        }
        else
        {
            $StoolDensity = $StoolSum/100;//野粪密度
            $StoolRatio = $StoolSnail / $StoolSum * 100;
        }




        $sql_1 = "INSERT INTO tb_is_snail (Task_Id,InfectionSnail,InfectionBox,InfectionArea,SnailIS_LivingSnailAVGDensity,SnailIS_InfectiousSchistosomaAVGDensity,SnailIS_SchistosomaInfection,SnailIS_SnailArea)
    VALUES ('$Task_Id',$InfectionSnail,$InfectionBox,$InfectionArea,$SnailIS_LivingSnailAVGDensity,$SnailIS_InfectiousSchistosomaAVGDensity,$SnailIS_SchistosomaInfection,$SnailIS_SnailArea)";
        mysqli_query($con, $sql_1);
        $snail_Id = mysqli_insert_id($con);

        $sql_2 = "INSERT INTO tb_is_infectionreason (StoolSum,StoolSnail,AcuteInfections,DeterminationOfContaminatedWater,StoolDensity,StoolRatio)
        VALUES ($StoolSum,$StoolSnail,$AcuteInfections,$DeterminationOfContaminatedWater,$StoolDensity,$StoolRatio)";
        mysqli_query($con, $sql_2);
        $infectionreason_Id = mysqli_insert_id($con);

        $sql_3 = "INSERT INTO tb_is_reason (CrowdActivities,RiskProject,RiverFlood,LocalTemperature)
            VALUES ($CrowdActivities,$RiskProject,$RiverFlood,$LocalTemperature)";
        mysqli_query($con, $sql_3);
        $reason_Id = mysqli_insert_id($con);

        $res = mysqli_query($con, "SELECT * FROM tb_e_task
            WHERE Task_Id='$Task_Id'");

        while ($row = mysqli_fetch_array($res)) {
            $Environment_Id = $row['Environment_Id'];
        }

        $sql = "INSERT INTO tb_is_sum (Task_Id,Environment_Id,snail_Id,infectionreason_Id,reason_Id)
            VALUES ('$Task_Id','$Environment_Id',$snail_Id,$infectionreason_Id,$reason_Id)";

        if (mysqli_query($con, $sql)) {
            echo "<script>alert('信息录入成功');</script>";
            echo "<script>location.href='rate.php';</script>";
        } else {
            echo "Error: " . $sql . "<br>" . mysqli_error($con);
        }
        mysqli_close($con);
    }
else{
    echo "<script>alert('任务编号录入有误，请核对后输入');</script>";
    echo "<script>location.href='is_lab.php';</script>";

}

?>





