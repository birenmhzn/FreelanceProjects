<!DOCTYPE html>
<html>
    <head>
        <title></title>
        <link rel="icon" type="image/png" href="img/8.png" sizes="16x16">
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
        <link rel="stylesheet" type="text/css" href="css/style.css">
    </head>
    <body>

        <?php
            if(isset($_SESSION["id"])) 
            {
                $name = $_SESSION["name"];
                $id = $_SESSION["id"]; 
        ?>
                <nav class="navbar">
                    <div class="fluid-container">
                        <div class="navbar-header">
                            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>                                                
                            </button>
                            <a class="navbar-brand color-white" href="index.php">Soccer Mingle</a>
                        </div>
                        <div class="collapse navbar-collapse" id="myNavbar">
                            <ul class="nav navbar-nav">
                                <li class="active color-white"><a href="index.php">Home</a></li>
                                <li><a href="msg.php">Message</a></li>
                                <li><a href="PotMatch.php">Potential Matches</a></li>
                                <li><a href="AggDat.php">Aggregate Data</a></li>
                                <li><a href="ProfilePage.php">My Profile</a></li>
                            </ul>
                            <ul class="nav navbar-nav navbar-right">
                                <li><a href="ProfilePage.php"><span class="glyphicon glyphicon-user"></span>&nbsp;Hello,&nbsp;<b><?php echo $_SESSION["name"]; ?></b></a></li>
                                <li><a href="logout.php">Logout</a></li>
                            </ul>
                        </div>
                    </div>
                </nav>
        <?php
            }
            else
            {
        ?>      
                <nav class="navbar">
                    <div class="fluid-container">
                        <div class="navbar-header">
                            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>                                                
                            </button>
                            <a class="navbar-brand color-white" href="index.php">Soccer Mingle</a>
                        </div>
                        <div class="collapse navbar-collapse" id="myNavbar">
                            <ul class="nav navbar-nav">
                                <li class="active"><a href="index.php">Home</a></li>
                            </ul>
                            <ul class="nav navbar-nav navbar-right">
                                <li><a href="login.php"><span class="glyphicon glyphicon-log-in"></span>&nbsp;Login</a></li>
                            </ul>
                            <ul class="nav navbar-nav navbar-right">
                                <li><a href="reg.php">&nbsp;Registration</a></li>
                            </ul>
                        </div>
                    </div>
                </nav>
        <?php
            }
        ?>
            </div>
        </div>
    </body>
</html>