<?php

session_start();
require_once('../database/functions.php');
if(!isset($_GET['id'])){
    redirect('../authentication/Login.php');
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../stylesheets/index.css">
    <link rel="stylesheet" href="./admin.css">
    <title>Document</title>
</head>
<body>
    <div class="nav">
        <div class="container">
            <div class="logo_div">
                <a href="#" class="logos">DASHBOARD</a>
            </div>
        </div>
    </div>
</body>
</html>