<?php
$my_data=array();
$my_data1=array();
$my_data2=array();

$my_data[0]=119.945212;
$my_data[1]=119.943487;
$my_data[2]=119.952686;
$my_data[3]=119.951392;

$my_data1[0]=31.811272;
$my_data1[1]=31.800225;
$my_data1[2]=31.803171;
$my_data1[3]=31.80538;

$my_data2[0]=$my_data;
$my_data2[1]=$my_data1;
$data=$my_data2;
echo json_encode($data);

?>