<?php
    $key = "caaf7e6df1c5d2cb5c2ca568a0397658";
?>
<script type="text/javascript">
    var postkey = "<?php echo $key; ?>";
</script>
<!DOCTYPE html>
<html>
    <head>
        <title></title>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.0/jquery-ui.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
        <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css">
        <link rel="stylesheet" type="text/css" href="style.css">
    </head>
    <body>
        <div class="container-fluid">
            <div class="container-fluid jumbotron">
                <h1>Movies Search Engine</h1> 
            </div>
            <script type="text/javascript" src="script.js"></script>
            <div class='search'>
                Type movie name here like, spider-man, ant-man, etc<br>
                <input type="text" id='search' placeholder="Search movie" onKeyPress="return checkSubmit(event)" required></input><br><br>
                <button class="search_btn" type="submit" onclick="btnSubmit()">Search</button>
            </div>
            <br><br>
            <div class="row text-center main"></div>
        </div>
    </body>
</html>