<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Input Data</title>
</head>
<body>
    <?php
    include_once('koneksi.php');
    $kode = $nama = $email = $web = $alamat = '';

    if(isset($_GET['kode'])) {
        $kode = $_GET['kode'];

        $query = "SELECT * FROM table_mahasiswa WHERE kode='$kode'";
        $result = $mysqli->query($query);

        if ($result->num_rows > 0) {
            $data = $result->fetch_assoc();
            $nama = $data['nama'];
            $email = $data['email'];
            $web = $data['web'];
            $alamat = $data['alamat'];
        } else {
            echo "Data tidak ditemukan.";
        }
    }
    ?>

    <form action="aksi.php" method="POST">
        <input type="hidden" name="kode" value="<?php echo $kode; ?>">
        <label for="nama">Nama:</label><br>
        <input type="text" id="nama" name="nama" size="40" value="<?php echo $nama; ?>"><br>

        <label for="email">Email:</label><br>
        <input type="email" id="email" name="email" size="40" value="<?php echo $email; ?>"><br>

        <label for="web">Web:</label><br>
        <input type="text" id="web" name="web" size="40" value="<?php echo $web; ?>"><br>

        <label for="alamat">Alamat:</label><br>
        <textarea id="alamat" name="alamat" rows="4" cols="40"><?php echo $alamat; ?></textarea><br>

        <?php
        if (isset($_GET['kode'])) {
            echo '<input type="submit" name="proses" value="Update">';
        } else {
            echo '<input type="submit" name="proses" value="Simpan">';
        }
        ?>
    </form>
</body>
</html>