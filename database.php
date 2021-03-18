<?php 
    $host = 'localhost';
    $user = 'root';
    $password = '';
    $database = 'bus_reserve_db';

    $connection = mysqli_connect($host, $user, $password, $database);

    if(mysqli_connect_error()){
        echo 'Unable to connect';
    }
?>