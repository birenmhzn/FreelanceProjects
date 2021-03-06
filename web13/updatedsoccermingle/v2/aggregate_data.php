<?php
    include('Config.php');
    session_start();
     $interest = null;
    if($_SESSION["id"]) {

        /*----------------------------------------------------------------
                                Message Part
        ------------------------------------------------------------------*/

        $sql="SELECT DAYNAME(datetime), Count(1) AS Count FROM `message` WHERE DAYOFWEEK(datetime) = 1 
        GROUP BY DAYNAME(datetime) UNION SELECT DAYNAME(datetime), Count(1) AS Count FROM `message` WHERE DAYOFWEEK(datetime) = 2 
        GROUP BY DAYNAME(datetime) UNION SELECT DAYNAME(datetime), Count(1) AS Count FROM `message` WHERE DAYOFWEEK(datetime) = 3 
        GROUP BY DAYNAME(datetime) UNION SELECT DAYNAME(datetime), Count(1) AS Count FROM `message` WHERE DAYOFWEEK(datetime) = 4 
        GROUP BY DAYNAME(datetime) UNION SELECT DAYNAME(datetime), Count(1) AS Count FROM `message` WHERE DAYOFWEEK(datetime) = 5 
        GROUP BY DAYNAME(datetime) UNION SELECT DAYNAME(datetime), Count(1) AS Count FROM `message` WHERE DAYOFWEEK(datetime) = 6 
        GROUP BY DAYNAME(datetime) UNION SELECT DAYNAME(datetime), Count(1) AS Count FROM `message` WHERE DAYOFWEEK(datetime) = 7 
        GROUP BY DAYNAME(datetime) ORDER BY 2 DESC LIMIT 1";          
        $runquery = mysqli_query($con,$sql);
        $row=mysqli_fetch_ASsoc($runquery);           
        $count = $row['Count'];
        $dayname = $row['DAYNAME(datetime)'];
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Aggregate Data</title>
        <link rel="icon" type="image/png" href="img/8.png" sizes="16x16">
    </head>
    <body>
        <div class="fluid-container">
            <?php include "header.php"; ?>
        </div>

        <div class="container">
            <h2 class="color-blue">Aggregate Data</h2><br>
            <div class="container width-80">
                <h3><b class="color-blue">Top 3 Most Liked</b></h3><hr style="color: black; background-color: black;border:0.50px solid #e0e0e0;">
               <div class="row">
                    <div class="col-md-8">
                        <?php
                            /*----------------------------------------------------------------
                                            Top likes Part
                            ------------------------------------------------------------------*/
                            $sql1 = "SELECT `soccer`.`title`, count(`soccer_id`) LikeCount FROM `likes` JOIN `soccer` ON `likes`.`soccer_id` = `soccer`.`id` GROUP BY `soccer`.`title` ORDER BY 2 DESC LIMIT 3";          
                            $runquery1 = mysqli_query($con,$sql1);
                            if($runquery1)
                            {     
                                while($row1=mysqli_fetch_ASsoc($runquery1)) 
                                {           
                                    $title = $row1['title'];
                                    $likecount = $row1['LikeCount'];  
                            ?>
                                    <h4><b class="color-dark-blue">Title&nbsp;:&nbsp;</b><?php echo $title; ?></h4>
                                    <h4><b class="color-dark-blue">Like Count&nbsp;:&nbsp;</b><?php echo $likecount; ?></h4><br>
                            <?php } } ?>
                    </div>
                    <div class="col-md-4"><br><br>
                        <img src="img/7.png" class="img-responsive" height="200" width="200">
                    </div>
               </div>
            </div>

            <div class="container width-80">
                <h3><b class="color-blue">The most popular day of the week to send messages</b></h3><hr style="color: black; background-color: black;border:0.50px solid #e0e0e0;">
                <h4><b class="color-dark-blue">Messages&nbsp;:&nbsp;</b><?php echo $count; ?></h4>
                <h4><b class="color-dark-blue">Popular Day&nbsp;:&nbsp;</b><?php echo $dayname; ?></h4><br>
            </div>
        </div>
    </body>
</html>
<?php
    }
    else 
    {
        echo "<script>
                alert('PleASe login first!');
                window.location = 'login.php';
            </script>";
    }
?>