<?php
session_start();

$dbhost = "localhost";
$dbname = "gambit";
$dbuser = "root";
$dbpass = "root";


$connection = mysql_connect($dbhost,$dbuser,$dbpass);
if(!$connection)
{
    die("DB connection failed" . mysql_error($connection));
}

$selectDB = mysql_select_db($connection,'gambit');

if(!$selectDB)
{
    die("DB connection failed" . mysql_error($connection));
}

?>