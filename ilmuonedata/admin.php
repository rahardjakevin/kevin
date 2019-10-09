<?php
include 'config/koneksi.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Admin</title>
</head>
<body>
    <a href="tambah.php">Tambah Data</a>
    <a href="index.php">Halaman Utama</a>
    <h2>Data Product</h2>
    <table border="1">
        <tr>
            <td>No</td>
            <td>Gambar</td>
            <td>Nama Product</td>
            <td>Harga</td>
            <td>Detail Product</td>
        </tr>
        <?php
        $no = 1;
        $query = mysqli_query($conn, "SELECT * FROM product");
        while($row = mysqli_fetch_array($query)){
        ?>
        <tr>
            <td><?php echo $no++; ?></td>
            <td> <img src="./assets/uploads/<?php echo $row['gambar']?>" alt="" width=100 height=100 ></td>
            <td><?php echo $row['name_product']?></td>
            <td><?php echo $row['price']?></td>
            <td><?php echo $row['detail_product']?></td>
        </tr>
        <?php } ?>
    </table>
</body>
</html>