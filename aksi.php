<?php
    //File koneksi.php
    include_once ('koneksi.php');

    //Menyimpan data mahasiswa ke dalam database
    function simpan_data($nama, $email, $web, $alamat)
    {
        global $mysqli;
        $query = "INSERT INTO table_mahasiswa (nama, email, web, alamat) VALUES ('$nama', '$email', '$web', '$alamat')";
        $eksekusi = $mysqli->query($query);

        if ($eksekusi) {
            echo "Proses Input Berhasil";
        } else {
            echo "Proses input gagal";
        }
    }

        //Menghapus data mahasiswa dari database
    function hapus_data($kode)
    {
        global $mysqli;
        $sql = "DELETE FROM table_mahasiswa WHERE kode='$kode'";
        $eksekusi = $mysqli->query($sql);

        if ($eksekusi) {
            echo "Proses hapus berhasil";
        } else {
            echo "Proses hapus gagal";
        }
    }

    //Mengupdate data mahasiswa di dalam database
    function update_data($kode, $web, $alamat)
    {
        global $mysqli;

        //Update data
        $sql = "UPDATE table_mahasiswa SET web='$web', alamat='$alamat' WHERE kode='$kode'";
        $eksekusi = $mysqli->query($sql);

        if ($eksekusi) {
            echo "Proses Update Berhasil";
        } else {
            echo "Proses Update Gagal";
        }
    }

    //Proses menghapus data
    if (isset($_GET['proses']) && $_GET['proses'] == 'hapus') {
        if (isset($_GET['kode'])) {
            $kode = $_GET['kode'];
            hapus_data($kode);
        } else {
            echo "Parameter 'kode' tidak ditemukan";
        }
    } else if (isset($_POST['proses'])) {
        //Proses menyimpan data 
        if ($_POST['proses'] == 'Simpan') {
            if (isset($_POST['nama'], $_POST['email'], $_POST['web'], $_POST['alamat'])) {
                $nama = $_POST['nama'];
                $email = $_POST['email'];
                $web = $_POST['web'];
                $alamat = $_POST['alamat'];
                simpan_data($nama, $email, $web, $alamat);
            } else {
                echo "Parameter yang diperlukan tidak lengkap";
            }
        }
        //Proses update 
        else if ($_POST['proses'] == 'Update') {
            if (isset($_POST['kode'], $_POST['web'], $_POST['alamat'])) {
                $kode = $_POST['kode'];
                $web = $_POST['web'];
                $alamat = $_POST['alamat'];
                update_data($kode, $web, $alamat);
            } else {
                echo "Parameter yang diperlukan tidak lengkap";
            }
        } else {
            echo "Proses tidak dikenali";
        }
    } else {
        echo "Tidak ada proses yang ditemukan";
    }
    ?>