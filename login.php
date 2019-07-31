<?php
include ("connection.php");
error_reporting(0);
session_start();
//header('location:login.php');
?>
<!DOCTYPE html>
<html>
    <head>
            <meta charset="utf-8">
            <meta name="viewport" content="width=device-width initial-scale=1">
            <link rel="stylesheet" href="css/css/bootstrap.css"/>
            <link rel="stylesheet" href="css/signup.css"/>
            <script src="js/signup.js"></script>
    </head> 
    <body>
    
    <br/>
    <br/>
    <br/>
        <div class="container">
        <div class="col-lg-4 m-auto">
            <div class="card">
                <form class="form-group" action="" method="POST" roll="form">
                <div class="col-lg-12 m-auto card-deader bg-dark">
                    <h1 class="text-white text-center">LogIn</h1>
                </div>
                UserName : <input type="text" name="user" value="" class="form-control " required/>
                Password : <input type="password" name="password" value="" class="form-control " required/>
                <input class="bg-success form-control text-white" type="submit" name="submit" Value="LogIn"/>
                </form>
                </div>
            </div>
        </div>
        
    </body>
    <?php
    $u=$_POST['user'];
    $p=$_POST['password'];
    $q="select * from signup where Username='$u' && Password='$p'";
    $result=mysqli_query($conn,$q);
    $rows=mysqli_num_rows($result);
            if($_POST['submit'])
            {
                       if($rows==1)
                   {
                       $_SESSION['user']=$u;
                        header('location:dashboard.php');
                   } 
                   else{
                    echo " <h5 class='text-warning'>wrong email or password</h5>";
                   // alrt();
                    header('location:login.php');
                    
                   }
                }       
        ?>
        </html> 