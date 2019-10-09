<?php
  session_start();
?>

<!DOCTYPE html>
<html lang="es" dir="ltr">
<head>
  <title>Register</title>
  <?php
   require 'head.php';
   ?>
</head>
<body>
  <?php
    require 'registerCode.php';
     require 'navbarg.php';
   ?>
  <!-- Registracion -->
  <!-- Default form register -->
<div class='container'>
  <form class="text-center border border-light p-5" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post" enctype="multipart/form-data">

      <p class="h4 mb-4">Registro de usuario</p>
      <?php if(!empty($error)): ?>
        <div class="alert alert-danger">
          <?php echo $error; ?>
        </div>
      <?php endif; ?>

      <div class="form-row mb-4">
          <div class="col">
              <!-- First name -->
              <input type="text" id="defaultRegisterFormFirstName" class="form-control"   name='firstname' value='<?php echo $_POST?$_POST['firstname']:'' ?>' placeholder = '<?php echo !empty($_POST['firstname'])?$_POST['firstname']:'Nombre' ?>'>
          </div>
          <div class="col">
              <!-- Last name -->
              <input type="text" id="defaultRegisterFormLastName" class="form-control"  name='lastname' value='<?php echo $_POST?$_POST['lastname']:'' ?>' placeholder = '<?php echo !empty($_POST['lastname'])?$_POST['lastname']:'Apellido' ?>'>
          </div>
      </div>

      <!-- E-mail -->
      <input type="email" id="defaultRegisterFormEmail" class="form-control mb-4"  name='email' value='<?php echo $_POST?$_POST['email']:'' ?>' placeholder = '<?php echo !empty($_POST['email'])?$_POST['email']:'Email' ?>'>
      <!-- Phone number -->
      <input type="text" id="defaultRegisterPhonePassword" class="form-control" aria-describedby="defaultRegisterFormPhoneHelpBlock" name='phone' value='<?php echo $_POST?$_POST['phone']:'' ?>' placeholder = '<?php echo !empty($_POST['phone'])?$_POST['phone']:'Telefono' ?>'>
      <small id="defaultRegisterFormPhoneHelpBlock" class="form-text text-muted mb-4" >

      </small>
      <!-- Password -->
      <!-- agregar placeholder a contraseña!! -->
      <input type="password" id="defaultRegisterFormPassword" class="form-control"  placeholder="Contraseña" aria-describedby="defaultRegisterFormPasswordHelpBlock" name='password1'>
      <small id="defaultRegisterFormPasswordHelpBlock" class="form-text text-muted mb-4" >

      </small>
      <input type="password" id="defaultRegisterFormPassword" class="form-control" placeholder="Repetir Contraseña" aria-describedby="defaultRegisterFormPasswordHelpBlock" name='password2'>
      <small id="defaultRegisterFormPasswordHelpBlock" class="form-text text-muted mb-4" >
          Al menos ocho caracteres y un digito!
      </small>




        <div class="input-group">
        <div class="input-group-prepend">
          <span class="input-group-text" id="inputGroupFileAddon01">Upload</span>
        </div>
      <div class="custom-file">
        <input type="file" class="custom-file-input" id="inputGroupFile01"
          aria-describedby="inputGroupFileAddon01" name='imgProfile'>
        <label class="custom-file-label" for="inputGroupFile01">Selecciona un archivo</label>
      </div>

    </div>

      <!-- Sign up button -->
        <!-- quitar name al button!! -->
      <button class="btn btn-info my-4 btn-block" type="submit" >Registro</button>

      <!-- Social register -->
      <p> O registrate con:</p>

      <a href="#" class="mx-2" role="button"><i class="fab fa-facebook-f light-blue-text"></i></a>
      <a href="#" class="mx-2" role="button"><i class="fab fa-twitter light-blue-text"></i></a>
      <a href="#" class="mx-2" role="button"><i class="fab fa-linkedin-in light-blue-text"></i></a>
      <a href="#" class="mx-2" role="button"><i class="fab fa-github light-blue-text"></i></a>

      <hr>

      <!-- Terms of service -->
      <p>Al hacer click en
          <em>Registrar</em> usted esta aceptando los
          <a href="" target="_blank">Terminos y condiciones</a>

  </form>
  <!-- Default form register -->
</div>

    <?php
    require 'footer.php';
     ?>
 </body>
</html>
