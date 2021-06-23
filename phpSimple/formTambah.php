<!DOCTYPE html>
<html>

<head>
    <title>Tugas 10 Arkademy</title>
</head>

<body>
    <header>
        <h3>Daftar Produk</h3>
    </header>

    <form action="prosesTambah.php" method="POST">

        <fieldset>

            <p>
                <label for="nama_produk">Nama Produk: </label>
                <input type="text" name="nama_produk" placeholder="nama produk" />
            </p>
            <p>
                <label for="keterangan">Keterangan Produk: </label>
                <textarea name="keterangan"></textarea>
            </p>
            <p>
                <label for="harga">Harga: </label>
                <input type="text" name="harga" placeholder="harga produk">
            </p>
            <p>
                <label for="jumlah">Jumlah: </label>
                <input type="text" name="jumlah" placeholder="jumlah" />
            </p>
            <p>
                <input type="submit" value="Tambah" name="tambah" />
            </p>

        </fieldset>

    </form>

</body>

</html>