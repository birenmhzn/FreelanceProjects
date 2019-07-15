<script>
    if ( window.history.replaceState ) {
        window.history.replaceState( null, null, window.location.href );
    }
</script>
<?php
    include('connection.php');
    session_start();
    date_default_timezone_set("Asia/Calcutta"); //India time (GMT+5:30)
    $datetime = date('d-m-Y h:i:sa');
    $usermail = null;
    if($_SESSION["id"]) 
    {
        $id = $_SESSION["id"];

        /*----------------------------------------------------------------
                                Message Query Part
        ------------------------------------------------------------------*/
        if(isset($_POST['MessageAfterMatch']))
        { 
            $MatchUserEmail = $_POST["MatchUserEmail"];
            $usermail=$MatchUserEmail;
        }

        /*----------------------------------------------------------------
                                Message Query Part
        ------------------------------------------------------------------*/
        if(isset($_POST['send']))
        { 
            $from_user_id = $_SESSION["id"];
            $message = $_POST['message'];
            $email = $_POST['email'];

            $sql2="SELECT * FROM `user` WHERE `email` = '$email'";          
            $runquery2 = mysqli_query($con,$sql2);
            $row2=mysqli_fetch_assoc($runquery2);
            $to_user_id = null;
            
            if($runquery2)
            {               
                $to_user_id = $row2['id'];
            }

            $sql3="INSERT INTO `message` (`from_user_id`, `to_user_id`, `text`) VALUES('$from_user_id', '$to_user_id', '$message')";
            $runquery3 = mysqli_query($con,$sql3);
        }
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Messages</title>
        <link rel="icon" type="image/png" href="img/8.png" sizes="16x16">
        <link rel="stylesheet" type="text/css" href="css/login.css">
        <style type="text/css">
            body  {
              background-image: url("img/9.png");
              background-repeat: no-repeat;
              background-attachment: fixed;
            }
        </style>
    </head>
    <body>
        <?php include "sidebar.php"; ?>
        <div class="main">
        <div class="container">
            <div class="login">
                <div class="login-triangle"></div>
              
                <h2 class="login-header">Message</h2>

                <form class="login-container" action="#" method="post">
                    <p><input type="email" id="email" name="email" placeholder="Enter Email" value="<?php echo $usermail; ?>" required></p>
                    <p><textarea type="text" id="message" name="message" placeholder="Enter message" required></textarea></p>
                    <p><input type="submit" name="send" value="Send"></p>
                </form>
            </div>
        </div>

        <div class="container" style="background-color: #d8d8d8f2;">
            <div class="table-responsive">
                <h3><b class="color-dark-green">Received</b></h3>
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th>From</th>
                            <th>Date/Time</th>
                            <th>Message</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php                            
                            /*----------------------------------------------------------------
                                                    Message RECEIVED Query Part
                            ------------------------------------------------------------------*/
                            $sql1="SELECT * FROM `message` WHERE `to_user_id` = '$id'";          
                            $runquery1 = mysqli_query($con,$sql1);
                            if($runquery1)
                            { 
                                while($row1=mysqli_fetch_assoc($runquery1)) 
                                {               
                                    $from_user_id = $row1['from_user_id'];
                                    $datetime_RECEIVED = $row1['datetime'];
                                    $text_RECEIVED = $row1['text'];
                                    ?>
                                        <tr>
                                            <td><?php echo $from_user_id; ?></td>
                                            <td><?php echo $datetime_RECEIVED; ?></td>
                                            <td><?php echo $text_RECEIVED; ?></td>
                                        </tr>
                                <?php } } ?>
                    </tbody>
                  </table>
            </div>
        </div>
        <br><br>
        <div class="container" style="background-color: #d8d8d8f2;">
            <div class="table-responsive">
                <h3><b class="color-dark-green">Sent</b></h3>
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th>To&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</th>
                            <th>Date/Time</th>
                            <th>Message</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php                            
                            /*----------------------------------------------------------------
                                                    Message RECEIVED Query Part
                            ------------------------------------------------------------------*/
                            $sql4="SELECT * FROM `message` WHERE `from_user_id` = '$id'";          
                            $runquery4 = mysqli_query($con,$sql4);
                            if($runquery4)
                            { 
                                while($row4=mysqli_fetch_assoc($runquery4)) 
                                {          
                                    $to_user_id = $row4['to_user_id'];
                                    $datetime_RECEIVED = $row4['datetime'];
                                    $text_RECEIVED = $row4['text'];
                                    ?>
                                        <tr>
                                            <td><?php echo $to_user_id; ?></td>
                                            <td><?php echo $datetime_RECEIVED; ?></td>
                                            <td><?php echo $text_RECEIVED; ?></td>
                                        </tr>
                                <?php } } ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
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