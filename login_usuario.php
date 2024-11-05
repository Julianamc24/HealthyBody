<?php


    include 'conexion.php';


    $nombre = $_POST['nombre'];
    $contra = $_POST['contra'];
    $validar_login = mysqli_query($coneccion, " SELECT * FROM datos  WHERE nombre = '$nombre' AND contra = '$contra'");

    if(mysqli_num_rows($validar_login) > 0 ){
        $_SESSION['nombre'] = $nombre;
        header("location: body.php");
        exit;
    } else {
        echo '
        <script>
            alert("Usuario inexistente. Por favor, verifique los datos introducidos");
            window.location.href = "iniciar.html";
        </script>
        ';
        exit;
    }
?>