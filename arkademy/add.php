<html>
<head>
    <title>Tambah produk</title>
</head>

<body>
    <h1>Tambah data produk</h1>
    <br/><br/>

    <form action="add.php" method="post" name="form1">
        <table width="25%" border="0">
            <tr> 
                <td>Name</td>
                <td><input type="text" name="nama"></td>
            </tr>
            <tr> 
                <td>Harga</td>
                <td><input type="number" name="harga"></td>
            </tr>
            <tr> 
                <td>Jumlah</td>
                <td><input type="number" name="jumlah"></td>
            </tr>
            <tr> 
                <td>Keterangan</td>
                <td><input type="text" name="keterangan"></td>
            </tr>
            <tr> 
                <td></td>
                <td><input type="submit" name="Submit" value="Add"></td>
            </tr>
        </table>
    </form>
    
    <a href="index.php">Kembali</a>

    <?php
    if(isset($_POST['Submit'])) {
        $nama = $_POST['nama'];
        $harga = $_POST['harga'];
        $jumlah = $_POST['jumlah'];
        $keterangan = $_POST['keterangan'];

        include_once("config.php");

        $result = mysqli_query($mysqli, "INSERT INTO produk(nama_produk,harga,jumlah,keterangan) VALUES('$nama','$harga','$jumlah','$keterangan')");

        header("location:index.php");
    }
    ?>
</body>
</html>
