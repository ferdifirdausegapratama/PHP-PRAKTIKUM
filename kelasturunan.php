<?php
    class Induk
    {
        function fungsiInduk()
        {
            echo "Panggil fungsi Induk";
        }
    }
    class Anak extends Induk
    {
        function fungsiAnak()
        {
            echo "<br>Panggil fungsi Anak";
        }
    }
    $child = new Anak();
    $child->fungsiInduk();//Panggil fungsi Induk
    $child->fungsiAnak();//Panggil fungsi Anak
?>