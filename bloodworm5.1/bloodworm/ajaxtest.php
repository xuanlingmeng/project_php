<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "bloodworm_db";
$index=0;
$index1=0;
$index2=0;

//$location=array();
$conn = new mysqli($servername, $username, $password, $dbname);
//$result=$conn->query("select wltype,Task_Id from tb_wlo");
$sql="SELECT Task_Id,wltype,longitude_latitude,radius FROM tb_wlo_ ";
$result=mysqli_query($conn,$sql);
$array=array();
while($row=mysqli_fetch_array($result,MYSQLI_NUM))
{
    $array[]=$row;
}
//echo json_encode($array);



for($i=0;$i<count($array);$i++) {
    $arr = explode("|", $array[$i][2]);
    // echo json_encode($arr);
    foreach ($arr as $u) {
        $strarr = explode(",", $u);
        foreach ($strarr as $newstr) {

            $location[$index] = $newstr;
            $index++;
            //  echo $newstr . "</br>";
        }
    }
    //   echo json_encode($location);
    $array[$i][2] = $location;
    $length = count($location);

    for ($index = 0; $index < $length-2;$index=$index+2) {
        $longitude[$index1] = $location[$index];
        // echo json_encode($longitude[$index1])."</br>";
        $index1++;
    }
    // echo json_encode($longitude)."</br>";
    for($index =1; $index < $length ;$index=$index+2){
        $latitude[$index2] = $location[$index];
        $index2++;
    }
    //  echo json_encode($longitude)."</br>";
//$length1=count( $longitude);
//$length2=count( $latitude);

    for ($number = 0; $number < count($longitude); $number++)
    {
        $longitude[$number] = floatval($longitude[$number]);
        $location_length=count($longitude);

        //  echo $longitude[$number];
        // echo "</br>";
    }

    for ($number = 0; $number < count($latitude); $number++)
    {
        $latitude[$number] = floatval($latitude[$number]);
        //  echo $latitude[$number];
        //  echo "</br>";
    }

    $radius = $array[$i][3];
    $array[$i][2] = $longitude;
    $array[$i][3] = $latitude;
    $array[$i][4] = $radius;
    $array[$i][5]=$location_length;
    $array[$i][6]=count($array);
    $index=0;
    $index1=0;
    $index2=0;
}


echo json_encode($array);

//$list=array($wltype,$longitude,$latitude,$length,$radius);
/*echo json_encode($array[1]);
// 创建连接
$conn = new mysqli($servername, $username, $password, $dbname);
// 检测连接
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql=mysqli_query($conn,"select max(id) max_id from tb_wlo");
$field=mysqli_fetch_row($sql);
//var_dump($field) ;
$id_max=intval($field[0]);
$result1 = mysqli_query($conn,"SELECT * FROM tb_wlo WHERE id=$id_max");

while($row = mysqli_fetch_array($result1))
{
    $Task_Id=$row["Task_Id"];
    $form_field=$row["longitude_latitude"];
    $wltype= $row["wltype"];
    $radius= $row["radius"];
}
$conn->close();


$arr = explode("|",$form_field);
foreach($arr as $u)
{
    $strarr = explode(",", $u);
    foreach ($strarr as $newstr)
    {
        $location[$index]=$newstr;
        $index++;
        //  echo $newstr . "</br>";
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
    // echo $longitude[$number];
    //  echo "</br>";

}

for($number=0;$number<count( $latitude);$number++)
{
    $latitude[$number]=floatval( $latitude[$number]);
    //  echo $latitude[$number];
    //  echo "</br>";
}

$length=count( $latitude);
$list=array($wltype,$longitude,$latitude,$length,$radius);
//echo json_encode($list);

//var_dump($longitude);

/*$sql_1="INSERT INTO tb_wlo (Environment_Id,Task_Id,Type_WL,,Area,ExaOrEli,Eliminateperson,Examineperson,le,TaskTime)
VALUES ('$Environment_Id','$Task_Id','$wltype','$area','$chaluo','$person','$person', '$tasktype','$time')";
*/




/*$wltype=1;
//$longitude=[119.998858,120.009458,120.004644,120.004644];
//$latitude=[31.809584,31.809492,31.80222,31.80222];
$length=4;
$radius=500;
//$list=array($wltype,$longitude,$latitude,$length,$radius);
$list=["1",[120.008955,119.998212,120.012369,120.012369],[31.811824,31.806884,31.800777,31.800777],4,"0"];

echo json_encode($list);*/

?>

