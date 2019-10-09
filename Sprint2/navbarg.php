<?php
  if (!isset($_SESSION)) {
    session_start();
  }
 ?>
<!--Navbar -->
<nav class="mb-1 navbar navbar-expand-lg navbar-dark  elegant-color-dark">
  <a class="navbar-brand" href="index.php">GoodBuy!</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent-333"
    aria-controls="navbarSupportedContent-333" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarSupportedContent-333">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item">
        <a class="nav-link" href="index.php">Home</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="faq.php">Preguntas Frecuentes</a>
      </li>
    </ul>
    <form class="form-inline">
      <input class="form-control" type="search" placeholder="Ej: Notebook DELL" aria-label="Search">
      <button class="btn btn-outline-white btn-md my-2 my-sm-0 ml-3" type="submit">Buscar</button>
   </form>
    <ul class="navbar-nav ml-auto nav-flex-icons">
      <li class="nav-item">
        <a class="nav-link waves-effect waves-light">
          <i class="fab fa-twitter"></i>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link waves-effect waves-light">
          <i class="fab fa-google-plus-g"></i>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link waves-effect waves-light">
          <i class="fab fa-facebook-square"></i>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link waves-effect waves-light">
          <i class="fab fa-instagram"></i>
        </a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink-333" data-toggle="dropdown"
          aria-haspopup="true" aria-expanded="false">
          <?php if (!isset($_SESSION["name"])) :?>
          <i class="fas fa-user"></i>
        <?php else: ?>
          <p><?= $_SESSION["name"]?></p>
        <?php endif; ?>
        </a>
        <div class="dropdown-menu dropdown-menu-right dropdown-default"
          aria-labelledby="navbarDropdownMenuLink-333">
          <?php if (!isset($_SESSION["name"])) :?>
            <a class="dropdown-item" href="login.php">Login</a>
            <a class="dropdown-item" href="register.php">Registracion</a>
          <?php else: ?>
            <a class="dropdown-item" href="login.php">Cerrar Sesion</a>
            <a class="dropdown-item" href="profile.php">Perfil de Usuario</a>
          <?php endif; ?>

          <a class="dropdown-item" href="contact.php">Contacto</a>
        </div>
      </li>
    </ul>
  </div>
</nav>
<!--/.Navbar -->
