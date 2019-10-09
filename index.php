<!DOCTYPE html>
<html lang="es" dir="ltr">
<head>
  <title>Home</title>
  <?php
   require 'head.php';
   ?>
</head>

<body>
<?php
require 'navbarg.php';
 ?>
  <!--2- Nav-->
  <div class="container-fluid border-top">
    <ul class="nav justify-content-center">
  <li class="nav-item">
    <a class="btn nav-link text-dark border-right yellow accent-3" href="">CAMARAS</a>
  </li>
  <li class="nav-item">
    <a class="btn nav-link text-dark border-right yellow accent-3" href="">AUDIO</a>
  </li>
  <li class="nav-item">
    <a class="btn nav-link text-dark border-right yellow accent-3" href="celulares.php">SMARTPHONE</a>
  </li>
  <li class="nav-item">
    <a class="btn nav-link text-dark yellow accent-3" href="">ACCESORIOS</a>
  </li>
   </ul>
   <ul class="nav justify-content-center">
     <li class="nav-item">
       <a class="nav-link text-dark border-right border-bottom" href="#!"><i class="fas fa-heart prefix px-2"></i>Me Gusta!</a>
     </li>
     <li class="nav-item">
       <a class="nav-link text-dark border-bottom" href="#!"><i class="fas fa-cart-arrow-down prefix px-2"></i>Carrito!</a>
     </li>
   </ul>
</div>

  <div class="container-fluid mt-4">
    <div class="row">
      <div class="col-sm-6 col-md-3 col-lg-3">
        <img src="imgs/positivo.jpg" class="img-fluid" alt="Responsive image">
      </div>
      <div class="col-sm-6 col-md-3 col-lg-3">
        <img src="imgs/notebook.jpg" class="img-fluid" alt="Responsive image">
      </div>
      <div class="col-sm-6 col-md-3 col-lg-3">
        <img src="imgs/dell.jpg" class="img-fluid" alt="Responsive image">
      </div>
      <div class="col-sm-6 col-md-3 col-lg-3">
        <img src="imgs/acer.jpg" class="img-fluid" alt="Responsive image">
      </div>

    </div>
  </div>
  <br><br><br><br><br><br>

  <!-- Card-->
  <div class="container">
  <p class="accesorios">Los mejores accesorios!!</p>
  <hr>
</div>
  <div class="container justify-content-center">
    <div class="row">
      <div class="col-sm-12 col-md-3 justify-content-center">
  <div class="card" style="width: 13rem;">
  <img class="card-img-top" src="imgs/accesorios.jpg" alt="Card image cap">
  <div class="card-body">
    <h5 class="card-title">ACCESORIOS</h5>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    <a href="#" class="btn yellow accent-3">VER MÁS</a>
  </div>
</div>
</div>

<div class="col-sm-12 col-md-3 justify-content-center">
<div class="card" style="width: 13rem;">
<img class="card-img-top" src="imgs/camara.jpg" alt="Card image cap">
<div class="card-body">
  <h5 class="card-title">CAMARAS</h5>
  <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
  <a href="#" class="btn yellow accent-3">VER MÁS</a>
</div>
</div>
</div>

<div class="col-sm-12 col-md-3 justify-content-center">
<div class="card" style="width: 13rem;">
<img class="card-img-top" src="imgs/celular.jpg" alt="Card image cap">
<div class="card-body">
  <h5 class="card-title">SMARTPHONE</h5>
  <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
  <a href="celulares.php" class="btn yellow accent-3">VER MÁS</a>
</div>
</div>
</div>

<div class="col-sm-12 col-md-3 justify-content-center">
<div class="card" style="width: 13rem;">
<img class="card-img-top" src="imgs/auriculares.jpg" alt="Card image cap">
<div class="card-body">
  <h5 class="card-title">AURICULARES</h5>
  <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
  <a href="#" class="btn yellow accent-3">VER MÁS</a>
</div>
</div>
</div>

</div>
</div>
<br><br><br><br><br><br>
<div class="container">
  <img src="imgs/audio.jpg" class="img-fluid" alt="Responsive image">
</div>

<br><br><br><br><br><br>
<div class="container">
<p class="accesorios">
  Tenemos las mejores marcas!
</p>
<hr>
</div>
<div class="container">
  <div class="row">
   <div class="col-sm-12 col-md-3 col-lg-3">
     <img src="imgs/logodell.jpg" class="img-fluid" alt="Responsive image">
   </div>
   <div class="col-sm-12 col-md-3 col-lg-3">
     <img src="imgs/logohp.jpg" class="img-fluid" alt="Responsive image">
   </div>
   <div class="col-sm-12 col-md-3 col-lg-3">
     <img src="imgs/logoacer.jpg" class="img-fluid" alt="Responsive image">
   </div>
   <div class="col-sm-12 col-md-3 col-lg-3">
     <img src="imgs/logolenovo.jpg" class="img-fluid" alt="Responsive image">
   </div>
  </div>
</div>

 <br><br><br><br><br><br><br><br><br>
<!--CUOTAS-->
<div class="card text-center"style="background-color:white;">
 <div class="container-fluid  my-2">
  <div class="row">
    <div class="col-md-3 border-right card-body ">
      <p class="titulo">Pagá con crédito y debito</p>
      <p><a href="nav-link"> Ver Promociones!</a></p>
      <a class="fas fa-credit-card fa-2x prefix"href=""></a>


    </div>
    <div class="col-md-3 border-right card-body">
      <p class="titulo">Retiro gratis en cualquier</p>

      <p><a href="nav-link"> Sucursal!</a></p>
      <a class="fas fa-home fa-2x prefix"href=""></a>
    </div>
    <div class="col-md-3 border-right card-body">
      <p class="titulo">El envió más rápido</p>
      <p><a href="nav-link">Segui tu envió!</a></p>
      <a class="fas fa-truck fa-2x prefix"href=""></a>
    </div>
    <div class="col-md-3  card-body">
      <p class="titulo">Compra en GoodBuy!</p>
      <p><a href="nav-link"> Beneficios!</a></p>
      <a class="fas fa-shopping-cart fa-2x prefix"href=""></a>
    </div>
  </div>
</div>
</div>
<br>

 <?php
 require 'footer.php';
  ?>


</body>
</html>
