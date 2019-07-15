<!--Admin dashboard which is appears after successfull login-->
<script>
    if ( window.history.replaceState ) {
        window.history.replaceState( null, null, window.location.href );
    }
</script>
<?php
    include('Config.php');
	date_default_timezone_set("Asia/Calcutta");
    session_start();
    if($_SESSION["id"]) {
        if(isset($_POST["Send"]))
        {
            $DateTime = date("m-d-Y h:i:sa");
            $Title = $_POST['Title'];
            $Message = $_POST['Message'];
            $MessageTo = $_POST['MessageTo'];
            

            $sql = "INSERT INTO [dbo].[NotificationHistory]
                   ([MessageTo]
                   ,[Title]
                   ,[Message]
                   ,[DateTime])
                    VALUES(
                   '$MessageTo'
                   ,'$Title'
                   ,'$Message'
                   ,'$DateTime')";
            $stmt = sqlsrv_query($connect, $sql); 

            // Enabling error reporting
            error_reporting(-1);
            ini_set('display_errors', 'On');
     
            require_once 'Firebase.php';
            require_once 'Push.php';
     
            $firebase = new Firebase();
            $push = new Push();
     
            // optional payload
            $payload = array();
            $payload['team'] = 'India';
            $payload['score'] = '5.6';
     
            // notification title
            $title = $Title;
             
            // notification message
            $message = $Message;
             
            // push type - single user / topic
            $push_type = 'Global';
             
            // whether to include to image or not
            $include_image = FALSE;
     
     
            $push->setTitle($title);
            $push->setMessage($message);
            $push->setImage('');
            $push->setIsBackground(FALSE);
            $push->setPayload($payload);
     
     
            $json = '';
            $response = '';
     
            $json = $push->getPush();
            $regId = '';
            $response = $firebase->send($regId, $json);
        }
?>
<html>
    <head>
        <title>Push Notification Panel</title>
        <link rel="shortcut icon" href="//www.gstatic.com/mobilesdk/160503_mobilesdk/logo/favicon.ico">
        <link rel="stylesheet" href="http://yui.yahooapis.com/pure/0.6.0/pure-min.css">

        <!--Meta content starts here-->
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="">
        <meta name="author" content="">
        <!--Meta content ends here-->

        <!-- CDN Bootstrap complete CSS link -->
        <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

        <!-- CDN Bootstrap complete JavaScipt link-->
        <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

        <!--CSS Link -->
        <link rel="stylesheet" type="text/css" href="css/style.css">
        <script type="text/javascript" src="js/script.js"></script>
    </head>
    <body>
        <?php include "Sidebar.php"; ?>
        <div class="fluid-container margin-top-min-6">
            <section id="content-wrapper">
                <div class="row">
                    <div class="col-lg-11 border-bottom-grey margin-left-5">
                        <h2 class="content-title color-light-grey"> 
                            <a href="Dashboard.php">
                                <button class="btn background-color-transparent"><i class="fa fa-chevron-left"></i>  Back</button>
                            </a>Notification Panel
                        </h2>
                    </div>
                </div>
                <br>
                <div class="container">         
                    <form action="#" method="post">
                        <fieldset>
                            <legend>Send notification to all users</legend>
         
                            <label for="title">Title</label>
                            <input type="text" id="title" name="Title" class="form-control" placeholder="Enter title" style="width: 50%;">
                            <br>
                            <label for="message">Message</label>
                            <textarea class="form-control" rows="5" name="Message" id="message" placeholder="Notification message!" style="width: 50%;"></textarea>
                            <br>
                            <input type="hidden" name="MessageTo" value="Global"/>
                            <button type="submit" name="Send" class="pure-button-primary" style="border:none;width: 20%;padding: 1% 1%;">Send</button>
                        </fieldset>
                    </form>
                </div>
            </section>
        </div>
                    </section>
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
                window.location = 'index.php';
            </script>";
    }

?>