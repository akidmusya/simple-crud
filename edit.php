<?php
include_once("config.php");

if(isset($_POST['update']))
{   
    $id = $_POST['id'];

    $nama=$_POST['nama'];
    $harga=$_POST['harga'];
    $jumlah=$_POST['jumlah'];
    $keterangan=$_POST['keterangan'];

    $result = mysqli_query($mysqli, "UPDATE produk SET nama_produk='$nama',harga='$harga',jumlah='$jumlah',keterangan='$keterangan' WHERE id_produk=$id");

    header("Location: index.php");
}
?>
<?php
$id = $_GET['id_produk'];

$result = mysqli_query($mysqli, "SELECT * FROM produk WHERE id_produk=$id");

while($produk_data = mysqli_fetch_array($result)) {         
    $nama = $produk_data['nama_produk'];
    $harga = $produk_data['harga'];
    $jumlah = $produk_data['jumlah'];
    $keterangan = $produk_data['keterangan'];
}

?>
<html>
<head>  
    <title>Edit Data Produk</title>
</head>

<body>
    <h1>Edit Data Produk</h1>
    <br/><br/>

    <form name="update_user" method="post" action="edit.php">
        <table border="0">
            <tr> 
                <td>Nama</td>
                <td><input type="text" name="nama" value=<?php echo $nama;?>></td>
            </tr>
            <tr> 
                <td>Harga</td>
                <td><input type="number" name="harga" value=<?php echo $harga;?>></td>
            </tr>
            <tr> 
                <td>Jumlah</td>
                <td><input type="number" name="jumlah" value=<?php echo $jumlah;?>></td>
            </tr>
            <tr> 
                <td>Keterangan</td>
                <td><input type="text" name="keterangan" value=<?php echo $keterangan;?>></td>
            </tr>
            <tr>
                <td><input type="hidden" name="id" value=<?php echo $_GET['id_produk'];?>></td>
                <td><input type="submit" name="update" value="Update"></td>
            </tr>
        </table>
    </form>
    <a href="index.php">Kembali ke beranda</a>
</body>
</html>