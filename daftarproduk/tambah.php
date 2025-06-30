<?php include 'db.php'; ?>
<!DOCTYPE html>
<html>
<head>
    <title>Tambah Produk</title>
</head>
<body>
    <h2>Tambah Produk</h2>
    <form method="post">
        Nama Produk: <input type="text" name="nama"><br><br>
        Harga: <input type="number" name="harga"><br><br>
        Stok: <input type="number" name="stok"><br><br>
        <input type="submit" name="simpan" value="Simpan">
    </form>

    <?php
    if (isset($_POST['simpan'])) {
        $nama = $_POST['nama'];
        $harga = $_POST['harga'];
        $stok = $_POST['stok'];

        $conn->query("INSERT INTO produk (nama_produk, harga, stok) VALUES ('$nama', '$harga', '$stok')");
        echo "<script>window.location='index.php'</script>";
    }
    ?>
</body>
</html>
