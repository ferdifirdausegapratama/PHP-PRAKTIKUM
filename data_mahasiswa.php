<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Mahasiswa</title>
</head>
<body>
    <table width="513" border="0" align="center">
        <tr bgcolor="#FFFFCC">
            <td width="100">Nama</td>
            <td width="100">Email</td>
            <td width="74">Web</td>
            <td width="135">Isi</td>
            <td colspan="2"></td>
        </tr>
        <?php
            include_once 'koneksi.php';
            $query = "SELECT * FROM table_mahasiswa";
            $result = $mysqli->query($query);
        
            if ($result->num_rows > 0) {
                while ($data = $result->fetch_assoc()) {
        ?>
        <tr>
            <td><?php echo $data['nama']; ?></td>
            <td><?php echo $data['email']; ?></td>
            <td><?php echo $data['web']; ?></td>
            <td><?php echo $data['alamat']; ?></td>
            <td width="43">
                <div align="center">
                    <a href="form.php?kode=<?php echo $data['kode']; ?>">edit</a>
                </div>
            </td>
            <td width="35">
                <div align="center">
                    <a href="aksi.php?kode=<?php echo $data['kode']; ?>&proses=hapus">hapus</a>
                </div>
            </td>
        </tr>
        <?php
                }
            }
        ?>
    </table>
</body>
</html>