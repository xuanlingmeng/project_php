<?php
header('Content-Type:text/html; charset=gb2312');//使用gb2312编码，使中文不会变成乱码
$backValue=array();
$backValue=$_POST['trans_data2'];
//$backValue[2]=$_POST['trans_data'];
//$backValue[3]=$_POST['trans_data1'];

echo json_encode($backValue);
?>