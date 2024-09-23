<?php
    $host = "localhost";
    $username = "root";
    $password = "Pratama157";
    $namaDB = "22081010247_ferdi";
    $mysqli = new mysqli($host,$username,$password,$namaDB);
    // Check connection
    if ($mysqli -> connect_errno) {
        echo "Failed to connect to MYSQL: " . $mysqli -> connect_error;
        exit();
    } else {
        echo "Berhasil Connect";
    }

?>