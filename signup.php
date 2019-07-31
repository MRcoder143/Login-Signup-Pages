    <?php
    include ("connection.php");
    error_reporting(0);
    ?>
    <!DOCTYPE html>
    <html>
        <head>
                <meta charset="utf-8">
                <meta name="viewport" content="width=device-width initial-scale=1">
                <link rel="stylesheet" href="css/css/bootstrap.css"/>
                <link rel="stylesheet" href="css/signup.css"/>
        </head> 
        <body>
        
        <br/>
        <br/>
        <br/>
            <div class="container">
            <div class="col-lg-4 m-auto">
                <div class="card">
                    <form class="form-group" action="" method="GET">
                    <div class="col-lg-12 m-auto card-deader bg-dark">
                        <h1 class="text-white text-center">Signup</h1>
                    </div>
                    First Name : <input type="text" name="firstname" value="" class="form-control"/>
                    Last Name : <input type="text" name="lastname" value="" class="form-control"/>
                    User Name : <input type="text" name="user" value="" class="form-control " required placeholder="eg : rajamoeez123"/>
                    Email : <input type="email" name="email" value="" class="form-control " required placeholder="email@example.com"/>
                    Password : <input type="password" name="pass" value="" class="form-control " required />
                    Confirm Password : <input type="password" name="confpass" value="" class="form-control " required/>
                    Gender : <input type="text" name="gender" value="" class="form-control"/>
                    <input class="bg-success form-control text-white" type="submit" name="submit" Value="SignUp"/>
                    </form>
                    </div>
                </div>
            </div>
            
        </body>
        <?php
                if($_GET['submit'])
                {
                            $fname=$_GET['firstname'];
                            $lname=$_GET['lastname'];
                            $username=$_GET['user'];
                            $email=$_GET['email'];
                            $password=$_GET['pass'];
                            $confirm=$_GET['confpass'];
                            $gender=$_GET['gender'];
                            $q="select * from signup where Username='$username'";
                            $res=mysqli_query($conn,$q);
                            $rows=mysqli_num_rows($res);
                            if($password!=$confirm){
                                echo "<h4 class='text-danger'>password does not match</h4>";
                            }
                            elseif($rows==1)
                            {
                                echo "<h4 class='text-warning'> user alresdy taken</h4>"; 
                            }
                            else{
                                $query="insert into signup values('','$fname','$lname','$username','$email','$password','$confirm','$gender')";
                                $data=mysqli_query($conn,$query);
                            }
                            }
                            if($data)
                            {
                                echo "<h4 class='text-success'> successfully signedup </h4>";
                            }
                            else
                            {
                                echo "</br><h4 class='text-success'> fill the form for signup</h4>";
                            }
            ?>
            </html> 