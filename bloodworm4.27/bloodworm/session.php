<?php
session_start();
unset($_SESSION["name"]);
echo "<script>location.href='LoginTest.php';</script>";
?>