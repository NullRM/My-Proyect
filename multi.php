<?php
  session_start();
  if(!isset($_SESSION['usuario'])){
    echo '
      </script>
      alert("Por Favor debes iniciar sesion");
      window.location = "login.php"
      <script>
    ';

    header("location: login.php");
    session_destroy();
    die();
  }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Liceo Astin Jacobo</title>
    <link rel="stylesheet" href="asset/css/style_todo.css">
    <link rel="stylesheet" href="asset/css/diseño_code.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
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
                        
                    </ul>
                </nav>
                <div class="btn__menu" id="btn_menu"><i class="fas fa-bars"></i></div>
            </div>
        </div>
    </header>

    <div class="container_all" id="container__all">
        <div class="cover">

            <div class="bg_color"></div>
            <div class="wave w1"></div>
            <div class="wave w2"></div>

            
            </div>
        </div>



        

        <!-- Aquí comienza el código -->
        <div id="carouselExampleIndicators" class="carousel slide">
          <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
          </div>
          <div class="carousel-inner">
            <div class="carousel-item active">
              <img src="asset/imgs/multi.jpg" class="d-block w-100" alt="...">
            </div>
          </div>
          <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
          </button>
          <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
          </button>
        </div>
        

        <section id="about" class="about">
          <div class="container" data-aos="fade-up">
                    <div class="section-title">
              <h2>Acerca</h2>
              <p>Acerca de la Area de multimedia</p>
            </div>
            <div class="row content">
                        <div class="col-lg-10">
                <p>
                Las modalidades de multimedia en la educación abarcan una amplia gama de disciplinas, cada una con sus propias técnicas y aplicaciones especializadas. En animación, los estudiantes aprenden tanto técnicas tradicionales como digitales en animación 2D, así como modelado y animación en 3D y stop motion. Utilizan software avanzado como Adobe Animate, Toon Boom, Blender y Maya, aplicando sus habilidades en industrias como el cine, la televisión, la publicidad, los videojuegos y la educación. En el campo de los videojuegos, el enfoque está en la conceptualización y diseño de personajes y escenarios, así como en las mecánicas de juego. La programación juega un papel crucial, con el uso de lenguajes como C++ y Python, además de motores de juego populares como Unity y Unreal Engine. También se enseña el diseño de arte conceptual, la texturización, y la creación de efectos de sonido y música, integrando todos estos elementos para crear experiencias de juego inmersivas.
                  <br>
                La producción de video es otra área clave, que abarca todo el proceso creativo desde la preproducción hasta la postproducción. Durante la preproducción, los estudiantes se enfocan en la guionización, la planificación y el storyboarding, estableciendo una base sólida para sus proyectos. En la fase de producción, aprenden técnicas de filmación, manejo de cámaras, iluminación y dirección, asegurando una ejecución efectiva de sus ideas. La postproducción incluye la edición de video, la adición de efectos visuales, la corrección de color y la edición de sonido, utilizando herramientas de software como Adobe Premiere Pro y Final Cut Pro para perfeccionar sus obras. En diseño gráfico, los estudiantes manejan software como Adobe Photoshop, Illustrator, InDesign y CorelDRAW. Aprenden técnicas de diseño de logotipos, tipografía, maquetación de revistas y libros, y branding, aplicando sus habilidades en diversos campos como la publicidad, el marketing y los medios impresos y digitales. 
                  <br>
                Estas disciplinas no solo desarrollan habilidades técnicas y creativas en los estudiantes, sino que también fomentan el pensamiento crítico, la capacidad de resolución de problemas y la colaboración, preparándolos para una variedad de carreras en el dinámico mundo de los medios digitales y creativos.</p>
                
              </div>
              <div class="col-lg-6 pt-4">
              
                <!--<a href="#" class="btn-learn-more">Learn More</a>-->
              </div>
                        </div>
          </div>
        </section><!-- End About Section -->
        

        
        
    
        
       


        <Footer id="redes">
            <div class="container__footer">

                <div class="box__footer">
                    <div class="logo">
                        <img src="asset\img\favicon.ico" alt="">
                    </div>
                    <div class="terms">
                    El centro educativo se distingue por su educación integral, valores cristianos, programas extracurriculares en artes y deportes, y su compromiso con la comunidad y el entorno social
                    </div>
                </div>

                <div class="box__footer">
                    <h2>Soluciones</h2>
                    <a href="#">App Desarrollo</a>
                    <a href="#">App Marketing</a>
                    <a href="#">IOS Desarrollo</a>
                    <a href="#">Android Desarrollo</a>
                </div>

                <div class="box__footer">
                    <h2>Compañia</h2>
                    <a href="#">Acercda de</a>
                    <a href="#">Trabajos</a>
                    <a href="#">Procesos</a>
                    <a href="#">Servicios</a>              
                </div>

                <div class="box__footer">
                    <h2>Redes Sociales</h2>
                    <a href="#"><i class="fab fa-facebook-square"></i> Facebook</a>
                    <a href="#"><i class="fab fa-twitter-square"></i> Twitter</a>
                    <a href="#"><i class="fab fa-linkedin"></i> Linkedin</a>
                    <a href="#"><i class="fab fa-instagram-square"></i> Instagram</a>
                </div>
            </div>

            <div class="box__copyright">
                <hr>
                <p>© 2021 <b>Astin Jacobo Fe Alegria</b></p>
            </div>
        </Footer>

</div>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
<script src="asset/js/script_todo.js"></script>
<script src="asset/js/script_nav.js"></script>
</body>
</html>