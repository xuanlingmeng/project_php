<?php
//<script src="http://code.jquery.com/jquery-latest.js"></script>
$name=array();
$name=$_GET['str'];
$message = explode(',',$name);

for($index=0;$index<count($message);$index++)
{
    echo $message[$index];echo "</br>";
}
?>