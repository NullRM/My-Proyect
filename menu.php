
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Liceo Astin Jacobo</title>
    <link rel="stylesheet" href="asset/css/style_todo.css">
    <link rel="stylesheet" href="asset/css/diseño_code.css">
    <script src="https://kit.fontawesome.com/afe9703d8b.js" crossorigin="anonymous"></script>
    <link href="asset/img/favicon.ico" rel="icon">
</head>
<body class="todo">

<header id="header">
        <div class="container__header">
            <div class="logo">
                <img src="asset/img/favicon.ico" alt="">
            </div>
            <div class="container__nav">
                <nav id="nav">
                    <ul>
                        <li><a href="index.php" class="select"><i class="fa-solid fa-house"></i></a></li>
                        <li><a href="#about">ACERCA</a></li>
                        <li><a href="#redes">REDES</a></li>
                        <li><a href="#contact">CONTACTANOS</a></li>
                      
                        <?php if(isset($_SESSION['user'])): ?>
                        <li> <a href="user.php?id=<?php echo $_SESSION['id'] ?>"><i class="fa-solid fa-lightbulb" style="color: #3ce10e;">&nbsp &nbsp</i><?php echo $_SESSION['user']?></a></li>
                        <li><a href="php/cerrar_sesion.php"><i class="fa-solid fa-right-to-bracket"></i></a></li>
                        <?php else: ?>
                        <li><a href="login.php"><i class="fa-solid fa-user"></i></a></li>
                        <?php endif; ?>
                        
                    </ul>
                </nav>
                <div class="btn__menu" id="btn_menu"><i class="fas fa-bars"></i></div>
            </div>
        </div>
    </header>