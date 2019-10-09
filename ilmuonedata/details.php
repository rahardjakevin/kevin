<?php 
include 'config/koneksi.php'
?>
<?php 
$id = $_GET["id"];
$query = mysqli_query($conn, "SELECT * FROM product WHERE id_product = '$id'");
$row = mysqli_fetch_array($query);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/bootstrap-theme.min.css">
    <title>IlmuOneData</title>
</head>
<body>
<div class="pos-f-t">
  <div class="collapse" id="navbarToggleExternalContent">
    <div class="bg-dark p-4">
      <ul class="navbar-bar">
        <li class="nav-item"><a href="admin.php" class="nav-link menu">Admin</a></li>
        <!-- <li class="nav-item"><a href="" class="nav-link menu">About</a></li> -->
      </ul>
    </div>
  </div>
  <nav class="navbar navbar-dark bg-dark navbar">
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarToggleExternalContent" aria-controls="navbarToggleExternalContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <a href="index.php"><h1 class="title"><img src="assets/icon/cart.png" width="50" height="50" class="logo">SHOP NOW</h1></a>
  </nav>
</div>

<section class="kontent">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <img src="assets/uploads/<?php echo $row['gambar']?>" alt="" width="100%" height="100%">
            </div>
            <div class="col-md-6">
                <h2><?php echo $row['name_product']?></h2>
                <h3><?php echo 'IDR. ' . number_format($row['price'])?></h3>
                <h4>Details</h4>
                <p><?php echo $row['detail_product']?></p>
            </div>
        </div>

    </div>
</section>
    <script type="text/javascript" src="assets/js/jquery.min.js"></script>
    <script type="text/javascript" src="assets/js/popper.min.js"></script>
    <script type="text/javascript" src="assets/js/bootstrap.js"></script>

</body>
</html>