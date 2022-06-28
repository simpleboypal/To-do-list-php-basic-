<?php
    $servername="localhost";
    $username="root";
    $password="";
    $dbname="30dayscms";

    $conn = new mysqli($servername, $username, $password, $dbname);
    
    if($conn)
    {
        echo "Database connected";
    }
    else
    {
        echo "Database Failed";
    }
?>