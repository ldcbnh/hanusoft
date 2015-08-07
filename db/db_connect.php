<?php

session_start();
$host = "localhost";
$mysqlusername = "root";
$mysqlpassword = "root";
$link = mysql_connect($host, $mysqlusername, $mysqlpassword) or die("Error connecting to mysql server: " . mysql_error());

$dbname = 'hanusoft_website';
mysql_select_db($dbname, $link) or die("Error selecting specified database on mysql server: " . mysql_error());

?> 
