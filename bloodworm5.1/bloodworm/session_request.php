<?php
session_start();
$privilege=$_SESSION["privilege"];
if($privilege==4)
{
    echo "<script>location.href='personrequests.php';</script>";
}
else
{
    echo "<script>alert('您的权限不够，无法访问！');</script>";
    echo "<script>location.href='PersonRegister.php';</script>";

}

?>