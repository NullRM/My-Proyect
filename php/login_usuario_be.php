<?php
    session_start();
    include 'conexion_be.php';

    $correo = $_POST['correo'];
    $contrasena = $_POST['contrasena'];
    $pass = md5($contrasena);
    $query =  "SELECT * FROM usuarios WHERE correo='$correo' and contrasena='$pass'";
    $validar_login = mysqli_query($conexion,$query);
 
    if(mysqli_num_rows($validar_login) > 0){
        $_SESSION['usuario'] = $correo;
        while($res = mysqli_fetch_assoc($validar_login)){
      
            $_SESSION['user'] = $res['usuario'];
            $_SESSION['id'] = $res['id'];
            $_SESSION['nombre'] = $res['nombre_completo'];
            $_SESSION['mail'] = $res['correo'];
    
        }
        
        header("location: ../index.php");
        exit();
    }
    else{
        echo'
            <script>
                alert("Usuario no existe, Por favor Verifique los datos introducidos");
                window.location = "../"
            </script>
        ';
        exit();
    }

?>