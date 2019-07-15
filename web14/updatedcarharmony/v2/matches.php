<?php
    include('connection.php');
    session_start();
    if($_SESSION["id"]) {
        $id = $_SESSION["id"];
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Potential Matches</title>
        <link rel="icon" type="image/png" href="img/8.png" sizes="16x16">
    </head>
    <body>
        <?php include "sidebar.php"; ?>
        <div class="main">
        <div class="container">
            <h2 class="color-blue">Potential Matches</h2><br>
            <div class="container width-80 float-left">
                <?php
                    /*----------------------------------------------------------------
                        Update Query Part
                    ------------------------------------------------------------------*/
                    $sql="SELECT g1.`user_id`, COUNT(g1.`car_id`) FROM `likes` g1 WHERE `car_id` IN (SELECT `car_id` FROM `likes` WHERE `user_id` = $id) AND g1.`user_id` <> $id GROUP BY g1.`user_id` ORDER BY COUNT(g1.`car_id`) DESC";          
                    $runquery = mysqli_query($con,$sql);
                            
                    if($runquery)
                    {     
                        while($row=mysqli_fetch_assoc($runquery)) 
                        { 
                            $user_id = $row['user_id'];
                            /*----------------------------------------------------------------
                                Getting user details Query Part
                            ------------------------------------------------------------------*/
                            if ($user_id != $id) {
                                $sql2="SELECT * FROM `message` WHERE `from_user_id` = '$id' AND `to_user_id` = '$user_id'";          
                                $runquery2 = mysqli_query($con,$sql2);
                                $num_rows = mysqli_num_rows($runquery2);
                                if($num_rows == 0)
                                {
                                    $sql1="SELECT * FROM `user` WHERE `id` = '$user_id'";          
                                    $runquery1 = mysqli_query($con,$sql1);
                                    $row1=mysqli_fetch_assoc($runquery1);
                                            
                                    if($runquery1)
                                    {                   
                                        $name = $row1['name'];
                                        $email = $row1['email'];
                                        $profile = $row1['profile'];
                                        $photo_url = $row1['photo_url'];
                ?>
                                        <div class="row pm-1">
                                            <div class="col-md-3 pm-2">
                                                <img src="<?php echo $photo_url; ?>" alt="User Image" class="img-responsive" height="100" width="100">
                                            </div>
                                            <div class="col-md-9 pm-1">
                                                <div class="row">
                                                    <div class="col-md-12 pm-2">
                                                        <h2><b><?php echo $name; ?></b></h2>
                                                    </div>
                                                    <div class="col-md-12 pm-2 margin-top-min-5">
                                                        <p>
                                                            <b><h3>My Profile</h3></b>
                                                            <h6>
                                                                <?php echo $profile; ?>
                                                            </h6>
                                                        </p>
                                                        <form action="msg.php" method="post">
                                                            <input type="hidden" name="MatchUserEmail" value="<?php echo $email; ?>" required>
                                                            <button type="submit" class="btn btn-default float-left msg-btn" name="MessageAfterMatch">Message</button>
                                                        </form><br><br>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <br>
                    <?php } } } } } ?>
            </div>
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