<?php
function getConnection() {
    $serverName = "127.0.0.1";
    $user = "root";
    $password = "";
    $database = "dbusers";
    
    $connection = mysqli_connect($serverName, $user, $password, $database);
    if($connection){
        return $connection;
    }
    return false;
}