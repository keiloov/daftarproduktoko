<?php
include 'db.php';
$id = $_GET['id'];
$data = $conn->query("SELECT * FROM produk WHERE id=$id")->fetch_assoc();
?>
<!DOCTYPE html>
<html>
<head>
    <title>Edit Produk</title>
</head>
<body>
    <h2>Edit Produk</h2>
    <form method="post">
        Nama Produk: <input type="text" name="nama" value="<?= $data['nama_produk'] ?>"><br><br>
        Harga: <input type="number" name="harga" value="<?= $data['harga'] ?>"><br><br>
        Stok: <input type="number" name="stok" value="<?= $data['stok'] ?>"><br><br>
        <input type="submit" name="update" value="Update">
    </form>

    <?php
    if (isset($_POST['update'])) {
        $nama = $_POST['nama'];
        $harga = $_POST['harga'];
        $stok = $_POST['stok'];

        $conn->query("UPDATE produk SET nama_produk='$nama', harga='$harga', stok='$stok' WHERE id=$id");
        echo "<script>window.location='index.php'</script>";
    }
    ?>
</body>
</html>
