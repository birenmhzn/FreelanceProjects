<?php
    include('connection.php');
    session_start();
     $interest = null;
    if($_SESSION["id"]) {

        $name = $_SESSION["name"];
        $id = $_SESSION["id"];
        $sql="SELECT * FROM `user` WHERE `id` = '$id'";          
        $runquery = mysqli_query($con,$sql);
        $row=mysqli_fetch_assoc($runquery);
        $username = null;$email = null;$password = null;$profilepage = null;$photo_url = null;
        
        if($runquery)
        {               
            $username = $row['name'];
            $email = $row['email'];
            $password = $row['password'];
            $profile = $row['profile'];
            $photo_url = $row['photo_url'];
        }

        /*----------------------------------------------------------------
                                Update Query Part
        ------------------------------------------------------------------*/
        if(isset($_POST['update']))
        {   
            $username1 = $_POST['username'];
            $email1 = $_POST['email'];
            $password1 = $_POST['password'];
            $profilepage1 = $_POST['profilepage'];
            $photo_url1 = $_POST['photo_url'];                
            $passwordhash1 = null;
        
            if (CRYPT_BLOWFISH == 1)
            {
                $passwordhash1 = crypt($password1 ,'$2y$10$123534103030000999999ua/hX436ma7wYcLu/mLx99tio.j.Hyq2'); 
            }
            else
            {   
                echo '<script>alert("Blowfish DES not supported.");
                window.location="reg.php";</script>';
            }

            //--------- for user table
            $sql1="UPDATE `user` 
                SET `name` = '$username1' , 
                    `email` = '$email1' ,
                    `password` = '$passwordhash1' ,
                    `profilepage` = '$profilepage1' ,
                    `photo_url` = '$photo_url1'

                WHERE `user`.`id` = $id";
                  
            $runquery1 = mysqli_query($con,$sql1);

            if($runquery1) {

                $sql2="DELETE FROM `likes` WHERE `user_id` = $id";
                $runquery2 = mysqli_query($con,$sql2);

                if($runquery2) {
                    $implodecheckbox = implode(',', $_POST['car']); 
                    $explodecheckbox = explode(",",$implodecheckbox);
                    $selectedcheckbox = count($_POST['car']);
                    $runquery3 = null;
                    for ($i=0; $i <= $selectedcheckbox; $i++) 
                    { 
                        $carvalue = $explodecheckbox[$i];
                        $sql3="INSERT INTO `likes` (`user_id`, `car_id`) VALUES('$id','$carvalue')";
                        $runquery3 = mysqli_query($con,$sql3);
                    } 
                    if($runquery2)
                    {
                        echo '<script>alert("User details successfully updated.");
                            window.location="profilepage.php";</script>';
                    }
                    else
                    {
                        echo '<script>alert("Error!! to updating user details....1");
                            window.location="profilepage.php";</script>';
                    }
                }
                else
                {
                    echo '<script>alert("Error!! to deleting user details....2");
                        window.location="profilepage.php";</script>';
                }
            }
            else
            {
                echo '<script>alert("Error!! to updating user details....3");
                    window.location="profilepage.php";</script>';
            }
        }
?>
<!DOCTYPE html>
<html>
    <head>
        <title>profile</title>
        <link rel="icon" type="image/png" href="img/8.png" sizes="16x16">
    </head>
    <body>
        <?php include "sidebar.php"; ?>
        <div class="main">

        <div class="container">
            <h2 class="color-blue">User profile</h2>
            <form action="#" method="post" id="updateform">
                <div class="form-group" style="padding: 2% 2%;">
                    <label for="username">Username:</label>
                    <input type="username" class="form-control" id="username" name="username" placeholder="Enter Username" value="<?php echo $username; ?>" required>
                </div>
                <div class="form-group" style="padding: 2% 2%;">
                    <label for="email">Email:</label>
                    <input type="email" class="form-control" id="email" name="email" placeholder="Enter email" value="<?php echo $email; ?>" required>
                </div>
                <div class="form-group" style="padding: 2% 2%;">
                    <label for="password">password:</label>
                    <input type="password" class="form-control" id="password" name="password" placeholder="Enter password" value="<?php echo $password; ?>" required>
                </div>
                <div class="form-group" style="padding: 2% 2%;">
                    <label for="profile">Profile:</label>
                    <input type="text" class="form-control" id="profile" name="profile" placeholder="Enter profile" value="<?php echo $profile; ?>" required>
                </div>
                <div class="form-group" style="padding: 2% 2%;">
                    <label for="photo_url">Photo URL:</label>
                    <input type="photo_url" class="form-control" id="photo_url" name="photo_url" placeholder="Enter Photo URL" value="<?php echo $photo_url; ?>" required>
                </div>
                <div class="form-group" style="padding: 2% 2%;">
                    <div class="col-md-6">
                        <b><h3>Liked car</h3></b><br>
                        <script type="text/javascript" src="js/script.js"></script>
                        <?php
                            /*----------------------------------------------------------------
                                        Getting checkbox Query Part
                            ------------------------------------------------------------------*/
                            $sql4="SELECT * FROM `likes` WHERE `user_id` = '$id'";          
                            $runquery4 = mysqli_query($con,$sql4);
                            
                            if($runquery4)
                            {     
                                while($row4=mysqli_fetch_assoc($runquery4)) 
                                {           
                                    $user_idcheckbox = $row4['user_id'];
                                    $car_idcheckbox = $row4['car_id'];

                                    /*----------------------------------------------------------------
                                                Getting car title name Query Part
                                    ------------------------------------------------------------------*/
                                    $sql5="SELECT * FROM `car` WHERE `id` = '$car_idcheckbox'";          
                                    $runquery5 = mysqli_query($con,$sql5);
                                    $row5=mysqli_fetch_assoc($runquery5);
                                    
                                    if($runquery5)
                                    {                   
                                        $title = $row5['title'];

                        ?>              <label class="checkbox-container">&nbsp;<?php echo $title; ?>
                                            <input type="checkbox" disabled checked>
                                            <span class="checkmark"></span>
                                        </label>
                        <?php } 
                    } } ?>
                    </div>
                    <div class="col-md-6">
                        <b><h3>Select car</h3></b><br>
                        <?php
                        /*----------------------------------------------------------------
                                        Getting car title name Query Part
                            ------------------------------------------------------------------*/
                            $sql5="SELECT * FROM `car`";          
                            $runquery5 = mysqli_query($con,$sql5);
                            
                            while($row5=mysqli_fetch_assoc($runquery5)) 
                            {           
                                $id = $row5['id'];
                                $title = $row5['title'];
                ?>
                                <label class="checkbox-container">&nbsp;<?php echo $title; ?>
                                    <input type="checkbox" name="car[]" value='<?php echo $id; ?>'>
                                    <span class="checkmark"></span>
                                </label>
                    <?php } ?>
                    </div>
                </div>
                <br>
                <button type="submit" class="btn btn-default" name="update">Update</button>
            </form>
        </div></div>
    </body>
</html>
<?php
    }
    else 
    {
        echo "<script>
                alert('Please login first!');
                window.location = 'login.php';
            </script>";
    }
?>