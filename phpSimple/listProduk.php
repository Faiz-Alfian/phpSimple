<?php include("config.php"); ?>

<!DOCTYPE html>
<html>

<head>
    <title>Tugas 10 Arkademy</title>
</head>

<body>
    <header>
        <h3>Daftar Produk</h3>
    </header>

    <nav>
        <a href="formTambah.php">[+] Produk Baru</a>
    </nav>

    <br>

    <table border="1">
        <thead>
            <tr>
                <th>No</th>
                <th>Nama Produk</th>
                <th>Keterangan</th>
                <th>Harga</th>
                <th>Jumlah</th>
                <th>Tindakan</th>
            </tr>
        </thead>
        <tbody>

            <?php
            $sql = "SELECT * FROM tabel_produk";
            $query = mysqli_query($db, $sql);

            while ($produk = mysqli_fetch_array($query)) {
                echo "<tr>";

                echo "<td>" . $produk['id_produk'] . "</td>";
                echo "<td>" . $produk['nama_produk'] . "</td>";
                echo "<td>" . $produk['keterangan'] . "</td>";
                echo "<td>" . $produk['harga'] . "</td>";
                echo "<td>" . $produk['jumlah'] . "</td>";

                echo "<td>";
                echo "<a href='formEdit.php?id=" . $produk['id_produk'] . "'>Edit</a> | ";
                echo "<a href='hapus.php?id=" . $produk['id_produk'] . "'>Hapus</a>";
                echo "</td>";

                echo "</tr>";
            }
            ?>

        </tbody>
    </table>

    <p>Total: <?php echo mysqli_num_rows($query) ?></p>

</body>

</html>