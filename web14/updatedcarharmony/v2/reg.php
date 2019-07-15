<?php
    include "connection.php";
    session_start(); 
    if(isset($_POST['register']))
    {    
        $name = $_POST['username'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        $passwordhash = null;
        
        if (CRYPT_BLOWFISH == 1)
        {
            $passwordhash = crypt($password ,'$2y$10$123534103030000999999ua/hX436ma7wYcLu/mLx99tio.j.Hyq2'); 
        }
        else
        {   
            echo '<script>alert("Blowfish DES not supported.");
            window.location="reg.php";</script>';
        }
        $sql="INSERT INTO `user` (`name`, `email`, `password`) VALUES('$name','$email','$passwordhash') ";
          
        $runquery = mysqli_query($con,$sql);
          
        if($runquery)
        {
            echo '<script>alert("User successfully registered.");
            window.location="login.php";</script>';
        }
        else
        {
            echo '<script>alert("Error!! in registering user....");
            window.location="reg.php";</script>';
        }
    }
    if(isset($_SESSION["name"])) 
    {
        header("Location:profilepage.php");
    }
?>
<!DOCTYPE html>
<html>
    <head>
        <title>reg</title>
        <link rel="icon" type="image/png" href="img/8.png" sizes="16x16">
        <link rel="stylesheet" type="text/css" href="css/login.css">
    </head>
    <body  background="img/11.jpg">
        <div class="fluid-container">
            <?php include "sidebar.php"; ?>
        </div>

        <div class="container">
            <div class="login">
                <div class="login-triangle"></div>
              
                <h2 class="login-header">Register Yourself</h2>

                <form class="login-container" action="#" method="post">
                    <p><input type="text" id="username" name="username" placeholder="Enter Username" required></p>
                    <p><input type="email" id="email" name="email" placeholder="Enter email" required></p>
                    <p><input type="password" pattern="(?=.*\d)(?=.*[a-z]).{5,}" id="password" name="password" placeholder="Enter password" required></p>
                    <p><label><a href="login.php" class="color-glowing-blue">Already have an account?</a></label></p>
                    <p><input type="submit" name="register" value="Sign Up"></p>
                </form>
            </div>
        </div>
    </body>
</html>