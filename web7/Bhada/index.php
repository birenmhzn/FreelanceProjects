<?php
    include('Config.php');
    session_start();
    $message="";
    if(isset($_POST["submit"]))
    {
        if(count($_POST)>0) 
        {
            $AdminEmail = $_POST["AdminEmail"];
            $AdminPassword = $_POST["AdminPassword"];
            if($AdminEmail == "admin@bhada.com" && $AdminPassword == "admin@bhada") 
            {
                $_SESSION["id"] = 123;
                $_SESSION["name"] = "Admin";
            } 
            else 
            {
                $message = "<script>alert('Invalid Username or Password!');</script>";
                echo $message;
            }
        }
        if(isset($_SESSION["id"])) 
        {
            header("Location:Dashboard.php");
        }
    }
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <title>Admin Login</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <link rel="stylesheet" type="text/css" href="css/login/login.css">
        <link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">
    </head>

    <body>
        <div id="login-modal">
            <div id="login-modal-content">
                <div id="login-modal-title">
                    <h2>ADMIN LOGIN</h2>
                    <div class="underline-title"></div>
                </div>
                <div id="underline-title"></div>
                <form action="" method="post" class="form">

                    <label for="AdminEmail" style="padding-top:13px">&nbsp;Email</label>
                    <input id="AdminEmail" class="form-content" type="email" name="AdminEmail" autocomplete="on" required />

                    <div class="form-border"></div>

                    <label for="AdminPassword" style="padding-top:22px">&nbsp;Password</label>
                    <input id="AdminPassword" class="form-content" type="password" name="AdminPassword" required />

                    <div class="form-border"></div>

                    <input id="submit-btn" type="submit" name="submit" value="LOGIN" />

                </form>
            </div>
        </div>
    </body>
</html>