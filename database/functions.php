<?php

$database="Medication";

function connection()
{
    $servername = "localhost";
    $username = "root";
    $password = "";

    $conn = new mysqli($servername, $username, $password);

    if ($conn->connect_error) {
        die("There was a trying connecting to the server " . $conn->connect_error);
    } else {
        return $conn;
    }
}

function createDatabase($database){
    $connection=connection();
    $sql="CREATE DATABASE IF NOT EXISTS $database";
    if($connection->query($sql)){
        return true;
    }else{
        return false;
    }

}

function redirect($url){
    return header("Location:$url");
}