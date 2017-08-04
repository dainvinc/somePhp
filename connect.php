<?php
    $servername = "127.0.0.1";
    $username = "dainvinc";
    $password = "";
    $database = "c9";
    $port = 3306;

    $conn = mysqli_connect($servername, $username, $password, $database, $port);
    
 
    echo "connected successfully\n";
?>