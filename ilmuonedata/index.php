<?php
include ("config/koneksi.php")
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
    <title>IlmuKevin</title>
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
    <h1 class="title"><img src="assets/icon/cart.png" width="50" height="50" class="logo">SHOP NOW</h1>
  </nav>
</div>
<div id="carouselExampleIndicators" class="banner carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
  </ol>
  <!-- <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="d-block w-100" src="assets/banner/banner 1.png" alt="First slide" height="300">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="assets/banner/banner 2.png" alt="Second slide" height="300">
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div> -->
<!-- konten -->
<section class="konten">
  <div class="container">
    <h1>Produk Terbaru</h1>

    <div class="row">
      <?php
       $query = mysqli_query($conn, "SELECT * FROM product");
       while($row = mysqli_fetch_array($query)){
      ?>

      <div class="col-md-3">
        <br>
        <div class="thumbnail">
          <img src="assets/uploads/<?php echo $row['gambar'];?>" alt="" width='100%' height='200'>
          <div class="caption">
            <h3><?php echo $row['name_product'];?></h3>
            <h5><?php echo 'IDR. '. number_format($row['price']);?></h5>
            <a href="details.php?id=<?php echo $row['id_product']?>" class="btn btn-primary">Details</a>
          </div>
        </div>
      </div>
       <?php } ?>
    </div>
  </div>
</section>
<div class='center'>
  <?php
  include 'footer.php';
  ?>
</div>
    <script type="text/javascript" src="assets/js/jquery.min.js"></script>
    <script type="text/javascript" src="assets/js/popper.min.js"></script>
    <script type="text/javascript" src="assets/js/bootstrap.js"></script>

</body>
</html>