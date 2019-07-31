
<?php
include ("connection.php");
error_reporting(0);
session_start();
?>
<!DOCTYPE html>
<html>
    <head>
            <meta charset="utf-8">
            <meta name="viewport" content="width=device-width initial-scale=1">
            <link rel="stylesheet" href="css/css/bootstrap.css"/>
            <link rel="stylesheet" href="css/dashboard.css"/>
    </head>
    <body>
    <div class="conteiner">
    <div class="card card-header bg-dark">
        <h1 class="text-white text-center"> Welcome <?php echo $_SESSION['user']; ?> </h1>
        </div>
        </div>
        <div class="container">
       <a class="text-white " href="login.php"> <button class="loginbtn btn btn-primary">logout</button></a>
        </div>
    </body> 