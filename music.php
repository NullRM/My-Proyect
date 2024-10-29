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
              <img src="asset/imgs/areademusic.jpg" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
              <img src="asset/imgs/music.jpg" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
              <img src="asset/imgs/areademusic3.jpg" class="d-block w-100" alt="...">
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
              <p>Acerca de la Area de Musica</p>
            </div>
            <div class="row content">
                        <div class="col-lg-8">
                <p>
                  Las artes visuales en la educación comprenden diversas modalidades que permiten a los estudiantes explorar su creatividad y habilidades<br>
                   técnicas a través de múltiples enfoques y materiales. En dibujo y pintura, se enseñan técnicas básicas como el dibujo a lápiz, carboncillo
                    y tinta, así como técnicas avanzadas en pintura al óleo, acrílico, acuarela y pastel. Los estudiantes trabajan con una variedad de temáticas,<br>
                     desde la naturaleza muerta hasta el retrato y el paisaje, y experimentan con estilos que van desde el realismo hasta el arte abstracto.
                      La escultura, por su parte, involucra el uso de materiales como arcilla, mármol, madera, metal y yeso, y abarca técnicas de modelado,<br>
                       tallado, ensamblaje y fundición para crear trabajos en tres dimensiones que exploran el volumen, el espacio y la textura. La fotografía 
                       ofrece un enfoque tanto analógico como digital, enseñando técnicas de revelado y edición digital, y abarcando géneros como la fotografía artística,<br>
                        documental, de retrato, de paisaje y comercial. Se utiliza una variedad de cámaras y equipos de iluminación para desarrollar estas habilidades.
                        El arte digital es otra modalidad clave, donde los estudiantes utilizan programas como Adobe Photoshop, Illustrator, CorelDRAW y Procreate. Aquí,<br>
                         aprenden técnicas de ilustración digital, arte vectorial, retoque fotográfico y diseño gráfico, con aplicaciones prácticas en publicidad, ilustración de libros, <br>
                         cómics, videojuegos y animación. El enfoque pedagógico en las artes visuales se centra en desarrollar la percepción visual, fomentando la observación atenta y la
                         interpretación visual. Se enseña la teoría del color, composición y perspectiva para proporcionar una base sólida en la creación artística. Además, se enfatiza la crítica <br>
                         y la reflexión, desarrollando habilidades para la crítica constructiva y la reflexión sobre el propio trabajo y el de los demás, promoviendo un entendimiento profundo y una
                          apreciación crítica del arte. Este enfoque integral no solo enriquece la educación artística de los estudiantes, sino que también les brinda herramientas valiosas para su desarrollo<br>
                           personal y profesional, fomentando el pensamiento crítico, la creatividad y la capacidad de resolver problemas de manera innovadora.</p>
                
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