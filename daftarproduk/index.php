<?php include 'db.php'; ?>
<!DOCTYPE html>
<html>
<head>
    <title>Data Produk</title>
</head>
<body>
    <h2>Daftar Produk Toko</h2>
    <a href="tambah.php">+ Tambah Produk</a><br><br>
    <table border="1" cellpadding="8">
        <tr>
            <th>No</th>
            <th>Nama Produk</th>
            <th>Harga</th>
            <th>Stok</th>
            <th>Aksi</th>
        </tr>
        <?php
        $no = 1;
        $result = $conn->query("SELECT * FROM produk");
        while ($row = $result->fetch_assoc()) {
            echo "<tr>
                    <td>$no</td>
                    <td>{$row['nama_produk']}</td>
                    <td>Rp " . number_format($row['harga']) . "</td>
                    <td>{$row['stok']}</td>
                    <td>
                        <a href='edit.php?id={$row['id']}'>Edit</a> |
                        <a href='hapus.php?id={$row['id']}' onclick=\"return confirm('Hapus data ini?')\">Hapus</a>
                    </td>
                  </tr>";
            $no++;
        }
        ?>
    </table>
</body>
</html>
