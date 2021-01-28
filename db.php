<?php
session_start();
$server_name="localhost";
$db_username="pectrate_pecsheet";
$db_password="@FxRf]wM&eR,";
$db_name="pectrate_pecsheet";

$connection=mysqli_connect($server_name,$db_username,$db_password,$db_name);
$dbconfig=mysqli_select_db($connection,$db_name);


?>