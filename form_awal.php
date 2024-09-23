<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Input Data</title>
</head>
<body>
    <form action="aksi.php" method="POST">
        <label for="nama">Nama:</label><br>
        <input type="text" id="nama" name="nama" required><br>

        <label for="email">Email:</label><br>
        <input type="email" id="email" name="email" required><br>

        <label for="web">Web:</label><br>
        <input type="text" id="web" name="web" required><br>

        <label for="alamat">Alamat:</label><br>
        <textarea id="alamat" name="alamat" rows="4" cols="50"required></textarea><br>
        <input type="submit" name="proses" value="Simpan">
        <input type="reset" value="Reset">
    </form>
</body>
</html>