<!DOCTYPE html>
<html>

<head>
    <title>Tugas 10 Arkademy</title>
</head>

<body>
    <header>
        <h3 style="text-align:center;">CRUD Sederhana</h3>
        <h1 style="text-align:center;">Tugas 10 - level 3</h1>
    </header>

    <h3 style="text-align:center;">MENU</h3>
    <nav style="text-align:center;">
        <a href="formTambah.php">Tambahkan Produk</a> <br>
        <a href="listProduk.php">List Produk</a>
    </nav>
    <?php if (isset($_GET['status'])) : ?>
        <p>
            <?php
            if ($_GET['status'] == 'sukses') {
                echo "Penambahan Produk berhasil!";
            } else {
                echo "Penambahan gagal!";
            }
            ?>
        </p>
    <?php endif; ?>
</body>

</html>