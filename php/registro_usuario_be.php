<?php
    session_start();

    include 'conexion_be.php'; 

    $nombre_completo = $_POST['nombre_completo'];
    $correo = $_POST['correo'];
    $usuario = $_POST['usuario'];
    $contrasena = $_POST['contrasena'];
    $pass = md5($contrasena);
    //encriptamiento de contraseña 
    //$contrasena = hash('sha512', $contrasena);

    $query = "INSERT INTO usuarios(nombre_completo, correo, usuario, contrasena) 
              VALUES('$nombre_completo', '$correo', '$usuario', '$pass')";

    //verificar que el correo no se repita en la base de datos
    $verificar_correo = mysqli_query($conexion, "SELECT * FROM usuarios WHERE correo='$correo' ");

    if(mysqli_num_rows($verificar_correo) > 0){
        echo '
            <script>
                alert("este correo ya esta registrado. intenta con otro diferente");
                window.location = "../";
            </script>
        ';
        exit();

    }

    //verificar que el usuario no se repita en la base de datos
    $verificar_usuario = mysqli_query($conexion, "SELECT * FROM usuarios WHERE usuario='$usuario' ");

    if(mysqli_num_rows($verificar_usuario) > 0){
        echo '
            <script>
                alert("este usuario ya esta registrado. intenta con otro diferente");
                window.location = "../login.php";
            </script>
        ';
        exit();

    }


    $ejecutar = mysqli_query($conexion, $query);

    if($ejecutar){
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

    }else{
        echo'
        <script>
        alert("intentelo de nuevo Registro incompleto");
        window.location = "../login.php"
        </script>
    ';
    }

    mysqli_close($conexion);

?>