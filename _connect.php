<?php
$host = "plesk.remote.ac";
$username = "ws381235_webdev";
$password = "_Zb0jw429";
$dbname = "ws381235_webdev";
$connect = mysqli_connect($host, $username, $password, $dbname);
if (!$connect)
{
    die("Connection to db failed.");
}