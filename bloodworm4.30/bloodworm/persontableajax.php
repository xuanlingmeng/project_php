<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "bloodworm_db";
$conn = new mysqli($servername, $username, $password, $dbname);
$account=array();
$person=array();
class person_information
{
   // Public $Person_Id;
    Public $Person_username;
    Public $Person_Name;
    Public $Person_Sex;
  //  Public $Person_Birthday;
    Public $Person_field;
    Public $Person_Mobilephone;
    Public $Person_Email;
    Public $Person_Privilege;
    Public $long;

};

$person_list=new person_information();
//$conn->query("SET NAMES 'UTF8'");//解决读入mysql数据中文乱码问题
$sql="SELECT Account_Name,Account_Email,Account_Privilege FROM tb_e_account ";
$result=mysqli_query($conn,$sql);
while($row=mysqli_fetch_array($result,MYSQLI_NUM))
{
    $account[]=$row;
}

$sql_1="SELECT Person_username,Person_Name,Person_Sex,Person_field,Person_Mobilephone FROM tb_e_person ";
$result_1=mysqli_query($conn,$sql_1);
while($row=mysqli_fetch_array($result_1,MYSQLI_NUM))
{
    $person[]=$row;
}
//$sql_1="SELECT Person_username,Person_field,Person_Mobilephone FROM tb_e_person ";
//$result_1=mysqli_query($conn,$sql_1);
//while($row=mysqli_fetch_array($result_1,MYSQLI_NUM))
//{
//    $person[]=$row;
//}
//echo json_encode($person);
////echo "<script>alert($data);</script>";
//

for($i=0;$i<count($person);$i++)
{
    for($j=0;$j<count($account);$j++)
    {
        if($person[$i][0]==$account[$j][0])
        {
        //    $person_list->Person_Id[$i]=$person[$i][0];
            $person_list->Person_username[$i]=$person[$i][0];
            $person_list->Person_Sex[$i]=$person[$i][2];
            $person_list->Person_Name[$i]=$person[$i][1];
            $person_list->Person_field[$i]=$person[$i][3];
            $person_list->Person_Mobilephone[$i]=$person[$i][4];
            $person_list->Person_Privilege[$i]=$account[$j][2];
            $person_list->Person_Email[$i]=$account[$j][1];

        }

    }
}
$person_list->long=count($person);
echo json_encode($person_list);

?>

