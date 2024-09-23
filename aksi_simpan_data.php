<?php
    //File koneksi.php
    include_once ('koneksi.php');
    function simpan_data($nama, $email, $web, $alamat)
    {   
        //File koneksi.php
        include_once ('koneksi.php');
        //Memasukkan data ke dalam tabel
        $query = "INSERT INTO table_mahasiswa (nama, email, web, alamat) VALUES ('$nama', '$email', '$web', '$alamat')";
        $eksekusi = $mysqli->query($query);
        //Proses input berhasil atau gagal
        if ($eksekusi) {
            echo "Proses Input Berhasil";
        } else {
            echo "Proses input gagal";
        }
        //Fungsi simpa_data
        $nama = $_POST['nama'];
        $email = $_POST['email'];
        $web = $_POST['web'];
        $alamat = $_POST['alamat'];
        simpan_data($nama, $email, $web, $alamat);
    }
?>