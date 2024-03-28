<?php
$mysql_hostname = "localhost";
$mysqluser = "root";
$mysql_password = "";
$mysql_database = "form";
$conn = mysqli_connect($mysql_hostname, $mysqluser, $mysql_password, $mysql_database ) or die("Could not connect database");
?>