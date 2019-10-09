<?php
include 'config/koneksi.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>   
<h1>Halaman Admin</h1>
    <form action="" method="post" enctype="multipart/form-data">
        <table>
            <tr>
                <td>Nama Barang</td>
                <td>:</td>
                <td><input type="text" name="name_product"></td>
            </tr>
            <tr>
                <td>Harga</td>
                <td>:</td>
                <td><input type="text" name="price"></td>
            </tr>
            <tr>
                <td>Detail Barang</td>
                <td>:</td>
                <td><input type="text" name="detail_product"></td>
            </tr>
            <tr>
                <td>Gambar</td>
                <td>:</td>
                <td><input type="file" name="gambar" /></td>
            </tr>            
            <tr>
                <td></td>
                <td><a href="admin.php">Kembali</a></td>
                <td><input type="submit" name="kirim" value="Kirim" /></td>
            </tr>
        </table>
    </form>
    <?php
    if(isset($_POST['kirim'])){
        $nama_product = $_POST['name_product'];
        $harga = $_POST['price'];
        $detail = $_POST['detail_product'];
        $nama_file = $_FILES['gambar']['name'];
        $source = $_FILES['gambar']['tmp_name'];
        $folder = './assets/uploads/';

        move_uploaded_file($source,$folder.$nama_file);
        // echo "tekan";
        $insert = mysqli_query($conn, "INSERT INTO product VALUES(
            NULL,
            '$nama_product',
            '$harga',
            '$detail',
            '$nama_file')");
        if($insert){
            echo 'Berhasil Upload';
        }else{
            echo 'Gagal Upload';
        }            
    }
    ?>
</body>
</html>