<?php
include_once("config.php");

$result = mysqli_query($mysqli, "SELECT * FROM produk");
?>

<html>
<head>    
    <title>Daftar Produk</title>
</head>

<body>

    <h1>Daftar Stok Produk</h1>

    <table width='80%' border=1>

    <tr>
        <th>Nama</th> <th>Harga</th> <th>Jumlah</th> <th>Keterangan</th><th>Aksi</th>
    </tr>
    <?php  
    while($produk_data = mysqli_fetch_array($result)) {         
        echo "<tr>";
        echo "<td>".$produk_data['nama_produk']."</td>";
        echo "<td>".$produk_data['harga']."</td>";
        echo "<td>".$produk_data['jumlah']."</td>";
        echo "<td>".$produk_data['keterangan']."</td>";    
        echo "<td><a href='edit.php?id_produk=$produk_data[id_produk]'>Edit</a> | <a href='delete.php?id=$produk_data[id_produk]'>Hapus</a></td></tr>";        
    }
    ?>
    </table>
    <a href="add.php">Tambah Produk</a><br/><br/>
</body>
</html>