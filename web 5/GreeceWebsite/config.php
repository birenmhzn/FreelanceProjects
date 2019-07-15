<?php
/* Database credentials. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
define('DB_SERVER', 'mysql5005.site4now.net');
define('DB_USERNAME', 'a4441f_greece');
define('DB_PASSWORD', 'bs@greece30');
define('DB_NAME', 'db_a4441f_greece');
 
/* Attempt to connect to MySQL database */
$link = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);

// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
?>