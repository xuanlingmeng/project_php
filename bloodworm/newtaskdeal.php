<?php
header('Content-Type:text/html;charset=utf-8');
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "mydb";
$haoma = $_POST["haoma"];
$hjID = $_POST["hjID"];
$chaluo = $_POST["need"];
$wltype = $_POST["wltype"];
$form_field = $_POST["form-field"];
$person = $_POST["form-field-9"];

/*任务编号id="haoma"
环境编号id="hjID"
是否需要查螺 需要id="need"   不需要id="noneed"  (bit 0,1)
围栏类型  select name="wltype"
圈定围栏  id="form-field"
查/灭螺负责人员 id="form-field-9"
任务紧急程度  select name="enmer"   （int1,2,3）
任务建立时间  id="id-date-picker-1"
*/
$index=0;
$index1=0;
$index2=0;
$arr = explode("|",$form_field);
foreach($arr as $u)
{
    $strarr = explode(",", $u);
    foreach ($strarr as $newstr)
    {
        $location[$index]=$newstr;
        $index++;
        echo $newstr . "</br>";
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
    echo $longitude[$number];
    echo "</br>";

}

for($number=0;$number<count( $latitude);$number++)
{
    echo $latitude[$number];
    echo "</br>";
}

echo $haoma. "<br>";
echo $chaluo. "<br>";
echo $form_field;
//  119.988151, 31.806362 |119.998319, 31.804828 |119.998463, 31.811579 |119.998463, 31.811579 |



/*
if(isset($_POST["submit"]) &&$_POST["submit"] == "登录") {
    $email = $_POST["email"];
    $psw =$_POST["password"];
    if ($email == "" || $psw == "")
    {
        echo "<script>alert('请输入用户名或密码！'); history.go(-1);</script>";
    }
    else
    {
        $con = mysqli_connect("localhost", "root", "", "myDB");
// Check connection
        if (mysqli_connect_errno())
        {
            echo "Failed to connect to MySQL: " . mysqli_connect_error();
        }

        $result = mysqli_query($con, "SELECT * FROM myguests WHERE email='$email'and password='$psw' ");
        {
            if ($row = mysqli_fetch_array($result))
            {
                echo "<script>alert('succeed login');</script>";
                echo "<script>location.href='homeTest.php';</script>";

            }
            else
            {
                echo "<script>alert('fail login');</script>";
                echo "<script>location.href='LoginTest.php';</script>";

            }

        }
    }

}
else
    echo"数据传递失败";*/
echo "hello world";
?>