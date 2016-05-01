<?php
session_start();
unset($_SESSION["name"]);
unset($_SESSION["privilege"]);
echo "<script>location.href='LoginTest.php';</script>";
?>