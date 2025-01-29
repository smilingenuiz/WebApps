<?php
 
 // Database connection - in an ideal world, this would be in a separate .env file, but for the sake of simplicity, it's here 😇
 $host = "plesk.remote.ac";
 $username = "ws381235_webdev";
 $password = "z3q1w68C&";
 $database = "ws381235_webdev";

 // Connect to the database and return the connection object
 $connect = mysqli_connect($host, $username, $password, $database);
  
 // If the connection fails, kill the script and output an error message
 if (!$connect)
 {
     die("Connection to database has failed! Sad times 😢");
 }