<?php

include("config.php");

// kalau tidak ada id di query string
if (!isset($_GET['id'])) {
    header('Location: listProduk.php');
}

//ambil id dari query string
$id = $_GET['id'];

// buat query untuk ambil data dari database
$sql = "SELECT * FROM tabel_produk WHERE id_produk=$id";
$query = mysqli_query($db, $sql);
$produk = mysqli_fetch_assoc($query);

// jika data yang di-edit tidak ditemukan
if (mysqli_num_rows($query) < 1) {
    die("data tidak ditemukan...");
}

?>


<!DOCTYPE html>
<html>

<head>
    <title>Tugas 10 Arkademy</title>
</head>

<body>
    <header>
        <h3>Formulir Edit Produk</h3>
    </header>

    <form action="prosesEdit.php" method="POST">

        <fieldset>

            <input type="hidden" name="id" value="<?php echo $produk['id'] ?>" />

            <p>
                <label for="nama_produk">Nama Produk: </label>
                <input type="text" name="nama_produk" placeholder="nama produk" value="<?php echo $produk['nama_produk'] ?>" />
            </p>
            <p>
                <label for="keterangan">Keterangan: </label>
                <textarea name="keterangan"><?php echo $produk['keterangan'] ?></textarea>
            </p>
            <p>
                <label for="harga">Harga: </label>
                <input type="text" name="harga" placeholder="nama sekolah" value="<?php echo $produk['harga'] ?>" />
            </p>
            <p>
                <label for="jumlah">Jumlah: </label>
                <input type="text" name="jumlah" placeholder="nama sekolah" value="<?php echo $produk['jumlah'] ?>" />
            </p>
            <p>
                <input type="submit" value="Simpan" name="simpan" />
            </p>

        </fieldset>


    </form>

</body>

</html>