<?php include('header.php'); ?>
<head>
<link rel="stylesheet" type="text/css" href="/scss/carousel.css">
  <link rel="stylesheet" type="text/css" href="/node_modules/bootstrap/dist/css/bootstrap.min.css">
</head>
<main class="container mt-4">
  <h2>Productos Electrónicos</h2>
  <div class="row g-4">
    <!-- Producto 1 -->
    <div class="col-md-4">
      <div class="card h-100 shadow-sm">
        <img src="imagenesElectronicos/laptop.png" class="card-img-top"  alt="Iphone 17">
        <div class="card-body text-center">
          <h5 class="card-title">Iphone 17</h5>
          <p class="card-text fw-bold text-success">S/ 1200</p>
          <a href="#" class="btn btn-primary">Agregar al carrito</a>
        </div>
      </div>
    </div>

    <!-- Producto 2 -->
    <div class="col-md-4">
      <div class="card h-100 shadow-sm">
        <img src="imagenesElectronicos/note14.png" class="card-img-top" alt="Redmi Note 14">
        <div class="card-body text-center">
          <h5 class="card-title">Redmi Note 14</h5>
          <p class="card-text fw-bold text-success">S/ 150</p>
          <a href="#" class="btn btn-primary">Agregar al carrito</a>
        </div>
      </div>
    </div>
  </div>
</main>
<?php include('footer.php'); ?>
