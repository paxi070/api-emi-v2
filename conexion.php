<?php

$host = "b20wv4sialjipxt1fzmw-mysql.services.clever-cloud.com";
$username = "upjn4tbptbxsadkn";
$password = "JIWuyRAgcNrZmfBCmqh";
$dbname = "b20wv4sialjipxt1fzmw";
$port = "21322";

$conn = mysqlI_connect($host, $username, $password, $dbname, $port);

if(!$conn){
    die("Connection Failed: " .mysqli_connect_error());
}

?>