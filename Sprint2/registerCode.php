<?php
$error='';

if($_SERVER['REQUEST_METHOD'] == 'POST'){


  if(empty($_POST["firstname"])){
    $error .= 'Por favor ingrese un nombre <br>';
  }

  if(empty($_POST['lastname'])){
    $error .= 'Por favor ingrese un apellido <br>';
  }

  if(empty($_POST['email'])){
    $error .= 'Por favor introduce un email <br>';
  }elseif(!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)){
     $error .= 'Introduce un email valido <br>';
  }


  if(empty($_POST['phone'])){
     $error .= 'Por favor introduce el Telefono <br>';
  }elseif (!(is_numeric($_POST['phone']))) {
    $error .= 'El telefono debe ser numerico <br>';
    $_POST['phone']=NULL;
  }

  if(empty($_POST['password1']) && empty($_POST['password2'])){
     $error .= 'Por favor introduce ambas contraseñas <br>';
  }elseif( $_POST['password1'] != $_POST['password2']){
     $error .= 'Las contraseñas no coinciden <br>';
  }


  if($_FILES&&$error=='') {
    if($_FILES['imgProfile']['error']  !=0){
      $error .= 'Por favor introduce ambas contraseñas <br>Hubo un error en la carga de la imagen de perfil <br>';

    }else{
       $ext = pathinfo($_FILES['imgProfile']['name'], PATHINFO_EXTENSION);
       if($ext != 'jpg' && $ext!='jpeg' && $ext !='png'){
         $error .= 'Por favor introduce ambas contraseñas <br>El formato de imagen no es valido <br>';

       }else{
         $nombreArchivo = $_POST['firstname'].$_POST['lastname'].'.'.$ext;
         move_uploaded_file($_FILES['imgProfile']['tmp_name'], "imgs/imgProfiles/$nombreArchivo");
       }
    }
  }

  if($error == ''){

    if(file_exists("baseUsuarios.json")){
      $nombre = trim($_POST['firstname']);
      $nombre = filter_var($nombre, FILTER_SANITIZE_STRING);
      $apellido = trim($_POST['lastname']);
      $apellido = filter_var($apellido, FILTER_SANITIZE_STRING);
      $email = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);
      $usuario = [
          "nombre" => $nombre,
          "apellido"=> $apellido,
          "email" => $email,
          "telefono"=>$_POST['phone'],
          "imgPerfil"=> $nombreArchivo,
          "password" => password_hash($_POST["password1"],PASSWORD_DEFAULT)
      ];
      $listaUsuarios = file_get_contents('baseUsuarios.json');
      $usuariosArray = json_decode($listaUsuarios, true);
      //array_push($usuariosArray[],$usuario);
      $usuariosArray[]=$usuario;
      // $lista_usuarios_array[] = $_POST; si tomo de POST no guarda el hash de la contraseña!!
      $usuariosFinal = json_encode($usuariosArray);
      file_put_contents('baseUsuarios.json', $usuariosFinal);
      //echo 'Registro Exitoso!';exit;
      session_start();
      $_SESSION["name"]=$usuario["nombre"]." ".$usuario["apellido"];
      $_SESSION["email"]=$email;
      header("location:index.php");
    }else {
      $nombre = trim($_POST['firstname']);
      $nombre = filter_var($nombre, FILTER_SANITIZE_STRING);
      $apellido = trim($_POST['lastname']);
      $apellido = filter_var($apellido, FILTER_SANITIZE_STRING);
      $email = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);
      $usuario[] = [
          "nombre" => $nombre,
          "apellido"=> $apellido,
          "email" => $email,
          "telefono"=>$_POST['phone'],
          "imgPerfil"=> $nombreArchivo,
          "password" => password_hash($_POST["password1"],PASSWORD_DEFAULT)
      ];
      $usuariosFinal = json_encode($usuario);
      file_put_contents('baseUsuarios.json', $usuariosFinal);
      //echo 'Registro Exitoso';exit;
      session_start();
      $_SESSION["name"]=$usuario["nombre"]." ".$usuario["apellido"];
      $_SESSION["email"]=$email;
      header("location:index.php");
    }
  }
}

?>
