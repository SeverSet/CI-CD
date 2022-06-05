<?php
$servername = "db";
$username = "bbms";
$password = "QeyUDkK7k";
$dbname = "bloodbank";
$conn = new mysqli($servername, $username, $password, $dbname);
if(!$conn){
 die('Could not Connect MySql:' .mysql_error());
}
?>
