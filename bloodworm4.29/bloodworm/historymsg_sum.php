<?php
    header('Content-Type:text/html;charset=utf-8');

    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "bloodworm_db";
    $number=array();
    $message=array();

    //历史信息汇总
    $Environment_Id = $_POST["envirID"];
    $envirName = $_POST["envirName"];
    $Beach_BelongToCountry= $_POST["addressBel"];
    $BeachType = $_POST["envirType"];

    //滩情--BeachSituation_Id
    $PlantType=$_POST["planttype"];//植被种类
    $Height=$_POST["beachHeight"];//滩面高程

    //滩情变化 tb_his_beachchanges--BeachChanges_SludgeLandfill
    $SludgeLandfill_Year=$_POST["xiyuYear"];

    //历史螺情 tb_his_snailsituation_history--SnailSituation_Id
    $FirsSnailYear=$_POST["firstluoYear"];

    //相关疫情 tb_his_epidemic--Epidemic_Id
    $LivestockGrazing_YesNo=$_POST["hasLivestock"];

    //暨往灭螺 tb_his_eliminate--Eliminate_Id
    $Medicine_Method=$_POST["yaowuMethod"];




    // 创建链接
    $conn = mysqli_connect($servername, $username, $password, $dbname);
    // 检查链接
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }

    $sql_update="SELECT Environment_Id FROM tb_his_beachsituationsum ";
    $result=mysqli_query($conn,$sql_update);
    while($row=mysqli_fetch_array($result,MYSQLI_NUM))
   {
        $number[]=$row;
   }



    $isin = in_array(["$Environment_Id"],$number);
    if($isin) {
        $basic = mysqli_query($conn,"SELECT * FROM tb_his_beachsituationsum
        WHERE Environment_Id=$Environment_Id");
        while($row = mysqli_fetch_array($basic))
        {

            $BeachSituation_Id=$row['BeachSituation_Id'];
            $BeachChanges_SludgeLandfill=$row['BeachChanges_SludgeLandfill'];
            $SnailSituation_Id=$row['SnailSituation_Id'];
            $Epidemic_Id=$row['Epidemic_Id'];
            $Eliminate_Id=$row['Eliminate_Id'];
        }





        echo "<script>if(confirm('环境编号已经存在，是否更新？'))
        {location.href='envir_message.php?message=$BeachSituation_Id, $BeachChanges_SludgeLandfill,$SnailSituation_Id,$Epidemic_Id,$Eliminate_Id,$Environment_Id,$envirName,$Beach_BelongToCountry,$BeachType,$PlantType,$Height,$SludgeLandfill_Year,$FirsSnailYear,$LivestockGrazing_YesNo,$Medicine_Method';}
        else{alert('保存原有录入信息');}</script>";

    }



    else{
        $sql_1 = "INSERT INTO tb_his_beachsituation (PlantType,Height) VALUES ('$PlantType',$Height)";
        mysqli_query($conn, $sql_1);
        $BeachSituation_Id=mysqli_insert_id($conn);

        $sql_2 = "INSERT INTO tb_his_beachchanges (SludgeLandfill_Year) VALUES ($SludgeLandfill_Year)";
        mysqli_query($conn, $sql_2);
        $BeachChanges_SludgeLandfill=mysqli_insert_id($conn);

        $sql_3 = "INSERT INTO tb_his_snailsituation_history (FirsSnailYear) VALUES ($FirsSnailYear)";
        mysqli_query($conn, $sql_3);
        $SnailSituation_Id=mysqli_insert_id($conn);

        $sql_4 = "INSERT INTO tb_his_epidemic (LivestockGrazing_YesNo) VALUES ('$LivestockGrazing_YesNo')";
        mysqli_query($conn, $sql_4);
        $Epidemic_Id=mysqli_insert_id($conn);

        $sql_5 = "INSERT INTO tb_his_eliminate (Medicine_Method) VALUES ($Medicine_Method)";
        mysqli_query($conn, $sql_5);
        $Eliminate_Id=mysqli_insert_id($conn);



        $sql = "INSERT INTO tb_his_beachsituationsum (Environment_Id,envirName ,Beach_BelongToCounty,BeachType,BeachSituation_Id,BeachChanges_SludgeLandfill,SnailSituation_Id,Epidemic_Id,Eliminate_Id)
     VALUES ('$Environment_Id','$envirName', '$Beach_BelongToCountry','$BeachType',$BeachSituation_Id,$BeachChanges_SludgeLandfill,$SnailSituation_Id,$Epidemic_Id,$Eliminate_Id)";
        if (mysqli_query($conn, $sql))
        {
            echo "<script>alert('环境信息录入成功');</script>";
            echo "<script>location.href='eliminate.php';</script>";
        }
        else
        {
            echo "Error: " . $sql . "<br>" . mysqli_error($conn);
        }
    }
    mysqli_close($conn);
//echo "<script>location.href='nowtask.php';</script>";*/
?>






































