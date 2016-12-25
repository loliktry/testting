<?php
$host="localhost";
$user="hero";
$pwd="hero123";
$dbname="pemweb2016";

$link=mysql_connect($host,$user,$pwd);
$db = mysql_select_db($dbname,$link);
if(!$db) die("failed to connect to database.......");

?>