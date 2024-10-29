<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login-registrarse</title>
    <link rel="stylesheet" href="asset/css/style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
</head>
<body>
    <main>
        <div class="contenedor__todo">
            <div class="caja__trasera">
                <div class="caja__trasera-login">
                    <h3> ya tienes una cuenta?</h3>
                    <p>inicia sesion para entrar en la pagina</p>
                    <button id="btn__iniciar-sesion">iniciar sesion</button>
                </div>
                <div class="caja__trasera-register">
                    <h3> aun no tienes una cuenta?</h3>
                    <p>Registrarse para que puedas iniciar sesion</p>
                    <button id="btn__registrarse">registrarse</button>
                   
                </div>
            </div>
            <!-- formulario de login y register -->
            <div class="contenedor__login-register">
                    <!-- Login -->
                    <form action="php/login_usuario_be.php" method="POST" class="formulario__login">
                        <h2>iniciar sesion</h2>
                        <input type="text" placeholder="correo electronico" name="correo">
                        <input type="password" placeholder="contraseña" name="contrasena">
                        <button>entrar</button>  <a class="btn btn-outline-warning" href="index.php">Home</a>
                    </form>
                    <!-- Registrarse -->
                    <form action="php/registro_usuario_be.php"  method="POST" class="formulario__register">
                        <h2>Registrarse</h2>
                        <input type="text" placeholder="Nombre Completo" name="nombre_completo">
                        <input type="text" placeholder="correo electronico" name="correo">
                        <input type="text" placeholder="usuario" name="usuario">
                        <input type="password" placeholder="contraseña" name="contrasena">
                        <button>registrarse</button>
                        <a class="btn btn-outline-warning" href="index.php">Home</a>
                    </form>
            </div>
            
        </div>
    </main>
    <script src="asset/js/script.js"></script>
</body>
</html