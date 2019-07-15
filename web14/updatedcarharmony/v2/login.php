<?php
    include('connection.php');
    session_start();
    if(isset($_POST['login']))
    {  
        if(count($_POST)>0) 
        {
            $email = $_POST["email"];
            $password = $_POST["password"];
            $passwordhash = null;

            if (CRYPT_BLOWFISH == 1)
            {
                $passwordhash = crypt($password ,'$2y$10$123534103030000999999ua/hX436ma7wYcLu/mLx99tio.j.Hyq2'); 
            }
            else
            {   
                echo '<script>alert("Blowfish DES not supported.");
                window.location="login.php";</script>';
            }

            $sql="SELECT * FROM `user` WHERE `email` = '$email'";//`
            $runquery = mysqli_query($con,$sql);
            $row=mysqli_fetch_assoc($runquery);

                if($row)
                {               
                    $_SESSION["id"] = $row[id];
                    $_SESSION["name"] = $row[name];
                    $_SESSION['loggedin_time'] = time(); 

                    $password1 = $row[password]; 
                    if ($password1 == $passwordhash) {                        
                        echo '<script>alert("Welcome.");
                        window.location="aggregate_result.php";</script>';
                    }
                    else{                        
                        echo '<script>alert("Enter wrong password.");
                        window.location="login.php";</script>';
                    }
                }
                else
                {
                    echo '<script>alert("Dont have an account with this credentials.");
                    window.location="reg.php";</script>';
                }
        }
    }
    if(isset($_SESSION["id"])) 
    {
        header("Location:aggregate_result.php");
    }
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Login</title>
        <link rel="icon" type="image/png" href="img/8.png" sizes="16x16">
        <link rel="stylesheet" type="text/css" href="css/login.css">
    </head>
    <body background="img/11.jpg">

        <?php include "sidebar.php"; ?>
        <div class="main">

            <div class="fluid-container">
                <section id="content-wrapper">     
                    <div class="container">
                        <div class="login">
                            <div class="login-triangle"></div>
                          
                            <h2 class="login-header">Log in</h2>

                            <form class="login-container" action="#" method="post">
                                <p><input type="email" id="email" name="email" placeholder="Enter email" required></p>
                                <p><input type="password" id="password" name="password" placeholder="Enter password" required></p>
                                <p><label><a href="reg.php" class="color-glowing-blue">Don't have an account?</a></label></p>
                                <p><input type="submit" name="login" value="Log in"></p>
                            </form>
                        </div>
                    </div>
                </section>
            </div>
        </div>
    </body>
</html>