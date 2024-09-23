<?php
    require 'cobaclass.php';
    $as = new cobaPertama();
    $isi = $as->cetak_nama('22081010247 ','Ferdi Firdaus Ega Pratama','A');
    $isi = $as->alamat;
    echo($isi."<br>");
?>