<?php
ini_set(`display_errors`,1);
ini_set('display_startup_errors',1);
error_reporting(E_ALL);
$mensaje="";

if ($_POST) {/*es postback? si hay click*/
    //print_r($_POST); imprime los datos  de l submit del formulario
    //print_r($_GET); imprime los datos de la quiery string 
    //print_r($_REQUEST)

    $usuario = $_REQUEST["txtUsuario"];
    $clave = $_REQUEST["txtClave"];

    if($usuario != "" && $clave != ""){   

    header("location: acceso-confirmado.php");
    }
    else{
      $mensaje ="valido para  usuarios registrados";
    }
}
?>







<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>formulario</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
</head>
<body>
  <div style="displey: flex; flex-direction:column; width: 300px; padding: 1em">
     <h1>FORMULARIO</h1>
    <main class="container">
        <div class="row">
         <?php if(isset($mensaje)&& $mensaje != ""){
           echo' <div class="alert alert-danger" role="alert">' . $mensaje . "</div>";
         }
         ?>
         <div class="12-col">
           <form action="" method="POST" style="display: flex; flex-direction: column;">
             <div>
               <label for="">USUARIO: <input type="text" name="txtUsuario" id="txtUsuario"placeholder="ingrese su nombre" class="form-control"></label>
             </div>
             <div>
               <label for="">CLAVE: <input type="password" name="txtClave" id="txtClave"placeholder="ingrese su clave" class="form-control"></label>
             </div>
              <div>
              <br>
               <button type="submit" name="btnEnviar" id="btnEnviar" class="btn btn-primary">ENVIAR</button>
              </div>
           </form>
          </div>
        </div>
  </div>
</main>

    
</body>
</html>