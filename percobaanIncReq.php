<?php
    require_once ('cobaIncReq.php');
    salam();
    require_once('cobaIncReq.php'); //Tidak Akan Dipanggil
    echo('<br> Batas require once ----------------------');
    include_once('cobaIncReq.php');
    salam();
    include_once('cobaIncReq.php'); //Tidak Akan Dipanggil
?>