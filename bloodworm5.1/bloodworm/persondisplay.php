<?php
class person
{
    Public $privilege;
    Public $length;
    Public $username;
}
    $array_1=array();
    $person=new person();
    $con=mysqli_connect("localhost","root","","bloodworm_db");
    if (mysqli_connect_errno())
    {
        echo "Failed to connect to MySQL: " . mysqli_connect_error();
    }

    $result = mysqli_query($con,"SELECT * FROM tb_e_account
    WHERE Account_Privilege=1");

    while($row = mysqli_fetch_array($result))
    {
        $array_1[]=$row['Account_Name'];
       // $index++;
    }
for($i=0;$i<count($array_1);$i++)
{
    $person->username[$i]=$array_1[$i];
    $person->privilege[$i]=1;
}
$person->length=count($array_1);

echo json_encode($person);

?>