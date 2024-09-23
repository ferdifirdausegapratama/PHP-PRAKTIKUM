<?php
    //File koneksi.php
    include_once ('koneksi.php');
    //Untuk menyimpan data mahasiswa ke dalam database
    function simpan_data($nama, $email, $web, $alamat) {
        global $mysqli;
        $query = "INSERT INTO table_mahasiswa (nama, email, web, alamat) VALUES ('$nama', '$email', '$web', '$alamat')";
        $eksekusi = $mysqli->query($query);
        if ($eksekusi) {
            echo "Proses Input Berhasil";
        } else {
            echo "Proses input gagal";
        }
    }

    function hapus_data($kode) {
        
        global $mysqli;
        $sql = "DELETE FROM table_mahasiswa WHERE kode='$kode'";
        $eksekusi = $mysqli->query($sql);

        if ($eksekusi) {
            echo "Proses hapus berhasil";
        } else {
            echo "Proses hapus gagal";
        }
    }
    //Menyimpan data jika ada data yang dikirimkan melalui metode POST
    if (isset($_POST['nama'], $_POST['email'], $_POST['web'], $_POST['alamat'])) {
        $nama = $_POST['nama'];
        $email = $_POST['email'];
        $web = $_POST['web'];
        $alamat = $_POST['alamat'];
        simpan_data($nama, $email, $web, $alamat);
    
    }
    //Proses menghapus data jika dikirmkan melalui metode GET
    if (isset($_GET['kode'])){
        $kode = $_GET['kode'];
        hapus_data($kode);
    }
?>