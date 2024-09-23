<?php
    include('cobaIncReq.php');
    salam(); 
    include ('cobaIncReq.php'); //Akan Tetap Dipanggil
    echo ('<br> Batas Include -------------------------------');
    require ('cobaIncReq.php');
    salam(); 
    require('cobaIncReq.php');//Akan Tetap Dipanggil
?>