<?php
 ?>
 <!DOCTYPE html>
 <html lang="es" dir="ltr">
 <head>
   <title>Contacto</title>
   <?php
    require 'head.php';
    ?>
 </head>
 <body>
   <?php require 'navbarg.php' ?>
 <div class="container-fluid">
 <div class=" col-sm-12 col-md-12 mt-5">
   <div class="card">
     <div class="card-body">
       <h3 class="text-center">CONTACTO</h3>
       <hr class="danger-color-dark">
         <form>
           <div class="md-form">
              <i class="fas fa-user prefix"></i>
              <input type="text" id="nombre" class="form-control">
              <label for="nombre">Nombre</label>
           </div>
           <div class="md-form">
              <i class="fas fa-envelope-open-text prefix"></i>
              <input type="email" id="e-mail" class="form-control">
              <label for="e-mail">E-mail</label>
           </div>
           <div class="md-form">
              <i class="fas fa-phone-volume prefix"></i>
              <input type="tel" id="tel" class="form-control">
              <label for="tel">Celular</label>
           </div>
           <div class="md-form">
              <i class="fas fa-pencil-alt prefix"></i>
              <textarea id="texto" class="md-textarea" ></textarea>
              <label for="texto">Ingresa tus comentarios</label>
           </div>
           <div class="text-center">

             <button type="button" class="btn btn-lg yellow accent-3" name="button">ENVIAR</button>
           </div>
           <div class="text-center mt-2">
             <button type="button" class="btn  light-blue lighten-1" name="button"><i class="fab fa-twitter-square prefix">  Twitter</i></button>
             <button type="button" class="btn peach-gradient" name="button"><i class="fab fa-instagram prefix"></i>  Instragram</button>
             <button type="button" class="btn light-blue darken-4" name="button"><i class="fab fa-facebook-f prefix"></i>  Facebook</button>
           </div>

         </form>
     </div>
   </div>

 </div>
 </div>
 <!--CARD-->
 <div class="card text-center mt-5"style="background-color:white;">
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
<?php require 'footer.php'; ?>
 </body>
 </html>
