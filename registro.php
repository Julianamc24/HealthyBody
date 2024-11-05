
<?php
    include 'conexion.php';
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Registro</title>
        <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet" />
        <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
        <link href="https://fonts.googleapis.com/css?family=Lora:400,400i,700,700i" rel="stylesheet" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="css/styles.css" rel="stylesheet" />
        
    </head>
    <body>
    <style>
        i { 
        position: absolute;
        bottom: 250px;
        transform: translateX(-230px);
        font-size: 30px;

        cursor: pointer;
        }
        </style>
        <div class= "flex-container" > 
        <section class="cuadradoregister">
               
        
                 <form method="post" id="formulario">
                    
                    <h4 class="letraregister">
                        <span> ¡Bienvenido! </span> 
                          </h4>
                       <div>
                       <input class="controles" type="text" id="nombre" name="nombre" placeholder="Ingrese un nombre de usuario"><br><br>
                       <input class="controles" type="text" id="correo" name="correo" placeholder="Ingrese su correo"><br><br>
                       <input class="controles" type="password" id="contra" name="contra" placeholder="Cree su contraseña">  <br><br>
                       <i class='bx bx-show-alt'></i>
                       <script src="js/script.js"></script>
                       <div class="container">
                       <input class="botons" type="submit" name="enviar">

      </div>
      </div>               
                </form>

                <p>¿Ya tienes una cuenta? <a href="iniciar.html"> Inicia Sesión</a></p>
        </section>
        </div>
        
        <script src="js/validar.js"></script>

    </body>
</html>

<?php

  if(isset($_POST['enviar'])){
      
      $nombre = $_POST['nombre'];
      $correo = $_POST['correo'];
      $contra = $_POST['contra'];
      
      $insertar = "INSERT INTO datos Values ('$nombre','$correo','$contra','')";
    

      $verificar_nombre = mysqli_query($coneccion, "SELECT * FROM datos WHERE nombre='$nombre'");

      if(mysqli_num_rows($verificar_nombre) > 0){
        echo '
            <script>
                alert("Este nombre de usuario ya se encuentra registrado, intenta con uno diferente");
                window.location = "registro.php";
            </script>
        ';
        exit();
      }
      $coneccion = mysqli_query($coneccion,$insertar);
      if($coneccion) {
        echo '
            <script>
                alert("Usuario registrado existosamente");
                window.location = "body.php";
            </script>
        ';
      }
      else {
        echo '
            <script>
                alert("Intentelo nuevamente. Usuario no registrado existosamente");
                window.location = "registro.php";
            </script>
        ';
      }
  }
  
  mysqli_close($coneccion);
 
?>

