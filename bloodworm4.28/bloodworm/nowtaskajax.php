<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "bloodworm_db";
$index=0;
$index1=0;
$index2=0;
$conn = new mysqli($servername, $username, $password, $dbname);
$array_beachsituation=array();
$array_newtask=array();
$array_examinesnail=array();
$array_eliminatesnail=array();
$array_taskcontent=array();
$array_nowtask=array();
$index=0;
class task
{
    Public $Task_Id;
    Public $Environment_Id;
    Public $Type_WL;
    Public $ExaOrEli;
    Public $Eliminateperson;
    Public $Examineperson;
    Public $Task_Time;
    Public $envirName_Id;
    Public $Beach_BelongToCountry;
    Public $BeachType;
    Public $long;
};

$newtask=new task();
$donetask=new task();
$taskcontent=new task();
$nowtask=new task();

//$location=array();
//$result=$conn->query("select wltype,Task_Id from tb_wlo");
$sql="SELECT Environment_Id,Task_Id,Type_WL,ExaOrEli,Eliminateperson,Examineperson,TaskTime FROM tb_e_task ";
$result=mysqli_query($conn,$sql);
while($row=mysqli_fetch_array($result,MYSQLI_NUM))
{
    $array_newtask[]=$row;
}

for($i=0;$i<count($array_newtask);$i++)
{
    $newtask->Environment_Id[$i]=$array_newtask[$i][0];
    $newtask->Task_Id[$i]=$array_newtask[$i][1];
    $newtask->Type_WL[$i]=$array_newtask[$i][2];
    $newtask->ExaOrEli[$i]=$array_newtask[$i][3];
    $newtask->Eliminateperson[$i]=$array_newtask[$i][4];
    $newtask->Examineperson[$i]=$array_newtask[$i][5];
    $newtask->TaskTime[$i]=$array_newtask[$i][6];


}
$newtask->long=count($array_newtask);
$sql_1="SELECT Environment_Id,envirName ,Beach_BelongToCounty,BeachType FROM tb_his_beachsituationsum ";
$result_1=mysqli_query($conn,$sql_1);
while($row=mysqli_fetch_array($result_1,MYSQLI_NUM))
{
    $array_beachsituation[]=$row;
}

//echo json_encode( $array_beachsituation);


for($i=0;$i<count($array_beachsituation);$i++)
{
    for($j=0;$j<count($array_newtask);$j++)
    {
        if($array_beachsituation[$i][0]==$newtask->Environment_Id[$j])
        {

            $newtask->envirName_Id[$j]=$array_beachsituation[$i][1];
            $newtask->Beach_BelongToCounty[$j]=$array_beachsituation[$i][2];
            $newtask->BeachType[$j]=$array_beachsituation[$i][3];

        }

    }
}
for($j=0;$j<count($array_newtask);$j++)
{
    if (empty( $newtask->envirName_Id[$j]))
    {
        $newtask->envirName_Id[$j] = "NULL";
    }
    if (empty(  $newtask->Beach_BelongToCounty[$j]))
    {
        $newtask->Beach_BelongToCounty[$j] = "NULL";
    }
    if (empty( $newtask->BeachType[$j]))
    {
        $newtask->BeachType[$j] = "NULL";

    }
}

//echo json_encode($newtask);

$sql_2="SELECT Task_Id FROM tb_e_examinesnail ";
$result_2=mysqli_query($conn,$sql_2);

while($row=mysqli_fetch_array($result_2,MYSQLI_NUM))
{
    $array_examinesnail[]=$row;
}

$sql_3="SELECT Task_Id FROM tb_e_eliminatesnail ";
$result_3=mysqli_query($conn,$sql_3);
while($row=mysqli_fetch_array($result_3,MYSQLI_NUM))
{
    $array_eliminatesnail[]=$row;
}

  if(count($array_examinesnail)!=0 or count($array_eliminatesnail)!=0)
  {
      $array_taskcontent=array_merge ($array_examinesnail , $array_eliminatesnail);
      for($i=0;$i<count( $array_taskcontent);$i++)
      {
          for($j=0;$j<count($array_newtask);$j++)
          {
              if($array_taskcontent[$i]==[$newtask->Task_Id[$j]])
              {
                  // echo json_encode($array_taskcontent[0]);
                  // echo json_encode($newtask->Task_Id[0]);
                  $donetask->Task_Id[$i]=$newtask->Task_Id[$j];
                  $donetask->Environment_Id[$i]=$newtask->Environment_Id[$j];
                  $donetask->Type_WL[$i]=$newtask->Type_WL[$j];
                  $donetask->ExaOrEli[$i]=$newtask->ExaOrEli[$j];
                  $donetask->Eliminateperson[$i]=$newtask->Eliminateperson[$j];
                  $donetask->Examineperson[$i]=$newtask->Examineperson[$j];
                  $donetask->TaskTime[$i]=$newtask->TaskTime[$j];
                  $donetask->envirName_Id[$i]=$newtask->envirName_Id[$j];
                  $donetask->Beach_BelongToCounty[$i]=$newtask->Beach_BelongToCounty[$j];
                  $donetask->BeachType[$i]=$newtask->BeachType[$j];
                  //  echo json_encode($newtask->Task_Time);
              }
          }
      }

      $array_nowtask= array_diff($newtask->Task_Id,$donetask->Task_Id);
      $array_nowtask= array_values($array_nowtask);


      for($i=0;$i<count( $array_nowtask);$i++)
      {
          for($j=0;$j<count($array_newtask);$j++)
          {
              if($array_nowtask[$i]==$newtask->Task_Id[$j])
              {
                  // echo json_encode($array_taskcontent[0]);
                  // echo json_encode($newtask->Task_Id[0]);
                  $nowtask->Task_Id[$i]=$newtask->Task_Id[$j];
                  $nowtask->Environment_Id[$i]=$newtask->Environment_Id[$j];
                  $nowtask->Type_WL[$i]=$newtask->Type_WL[$j];
                  $nowtask->ExaOrEli[$i]=$newtask->ExaOrEli[$j];
                  $nowtask->Eliminateperson[$i]=$newtask->Eliminateperson[$j];
                  $nowtask->Examineperson[$i]=$newtask->Examineperson[$j];
                  $nowtask->TaskTime[$i]=$newtask->TaskTime[$j];
                  $nowtask->envirName_Id[$i]=$newtask->envirName_Id[$j];
                  $nowtask->Beach_BelongToCounty[$i]=$newtask->Beach_BelongToCounty[$j];
                  $nowtask->BeachType[$i]=$newtask->BeachType[$j];
                  //  echo json_encode($newtask->Task_Time);
              }
          }
      }
      $nowtask->long=count($array_nowtask);
//echo json_encode(  $donetask->TaskTime);
  }

    else
    {
        $nowtask=$newtask;
        $array_nowtask=$array_newtask;
    }

    for($i=0;$i<count($array_nowtask);$i++)
    {
        if ($nowtask->ExaOrEli[$i] == "0")
        {
            $nowtask->ExaOrEli[$i] = "查螺进行中";
        } else {
            $nowtask->ExaOrEli[$i] = "灭螺进行中";
        }
        if ($nowtask->Type_WL[$i] == "1") {
            $nowtask->Type_WL[$i] = "多边形";
        } else {
            $nowtask->Type_WL[$i] = "圆形";
        }
    }
    echo json_encode($nowtask);
?>

