<?php
session_start();
if (isset($_SESSION["name"])) {
  // setcookie("email","",-1);
  session_destroy();
  header("location:index.php");
}
$error='';
$usuarioControl=0;
if (isset($_COOKIE["email"])) {
  $email=$_COOKIE["email"];
}else{
  $email="";
}
if ($_POST) {

  if (isset($_POST["recordar"])) {

    if ($_POST["recordar"]=="on") {
      setcookie("email",$_POST["email"]);
    }
  }
  $usuarios = file_get_contents("baseUsuarios.json");
  $usuariosArray = json_decode($usuarios,true);
  $i=0;
  while($i<count($usuariosArray)){
    if($usuariosArray[$i]["email"]==$_POST["email"]){
      if (!password_verify($_POST["password"],$usuariosArray[$i]["password"])) {
        $error .= 'Contraseña Incorrecta!! <br>';
      }else{
        //bienvenido!!
        session_start();
        $_SESSION["email"]=$_POST["email"];
        $_SESSION["name"]=$usuariosArray[$i]["nombre"]." ".$usuariosArray[$i]["apellido"];
        header("location:index.php");
      }
      break;
    }
    $i++;
  }
  if($i==count($usuariosArray)){
    $error .= 'Usuario Inexistente!! <br>';
    $usuarioControl=1;
  }
}


 ?>
<!DOCTYPE html>
<html lang="es" dir="ltr">
<head>
  <title>Login</title>
  <?php
   require 'head.php';
   ?>
</head>

<body>
    <header>
    <?php
      require 'navbarg.php';

     ?>
    </header>

    <section class="section">
    <div class="container">
      <div class=" col-sm-12 col-md-12 mt-5">
        <div class="card">
          <div class="card-body">
            <h3 class="text-center">LOGIN</h3>
            <hr class="danger-color-dark">
              <form class='form-group' method="post" action="login.php">
                <div class="md-form">
                   <i class="fas fa-envelope-open-text prefix"></i>

                   <label for="e-mail">E-mail</label>
                   <input type="email" id="e-mail" class="form-control" name="email" value='<?php echo $usuarioControl==0&&$_POST?$_POST['email']:$email ?>'required>
                </div>
                <div class="md-form">

                   <i class="fas fa-pencil-alt prefix"></i>
                   <label for="password">Contraseña</label>
                   <input type="password" class="form-control"  name="password" required></input>

                </div>
                <!-- Remember me -->
                <div class="custom-control custom-checkbox my-3">
                    <input type="checkbox" class="custom-control-input" id="defaultLoginFormRemember" name="recordar">
                    <label class="custom-control-label" for="defaultLoginFormRemember">Recuerdame</label>
                </div>
                <div class="text-center">
                  <?php if(!empty($error)): ?>
                    <div class="container text-center danger-color-dark">
                      <?php echo $error; ?>
                    </div>
                  <?php endif; ?>
                  <button type="submit" class="btn btn-lg yellow accent-3" name="button">Ingresar</button>
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
    </section>
    <br><br><br>

    </div>
    <?php
      require 'footer.php';
     ?>
  </body>
</html>
