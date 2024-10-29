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
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="asset/css/diseño.css">
    <link href="asset/img/favicon.ico" rel="icon">
</head>
<body>
    <!--<nav class="navbar navbar-dark bg-dark fixed-top">
        <div class="container-fluid">
        <a class="navbar-brand" href="#">
      <img src="asset/img/favicon.ico" alt="Bootstrap" width="30" height="30">
      </a>
          <a class="navbar-brand"  href="#">Astin Jacobo Fe Alegria</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasDarkNavbar" aria-controls="offcanvasDarkNavbar" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="offcanvas offcanvas-end text-bg-dark" tabindex="-1" id="offcanvasDarkNavbar" aria-labelledby="offcanvasDarkNavbarLabel">
            <div class="offcanvas-header">
              <h5 class="offcanvas-title" id="offcanvasDarkNavbarLabel">Menu</h5>
              <button type="button" class="btn-close btn-close-white" data-bs-dismiss="offcanvas" aria-label="Close"></button>
            </div>
            <div class="offcanvas-body">
              <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
                <li class="nav-item">
                  <a class="nav-link active" aria-current="page" href="#">Home</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#">Link</a>
                </li>
                <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    Dropdown
                  </a>
                  <ul class="dropdown-menu dropdown-menu-dark">
                    <li><a class="dropdown-item" href="index.php">Login/Register</a></li>
                    <li><a class="dropdown-item" href="php/cerrar_sesion.php">LogOut</a></li>
                    <li>
                      <hr class="dropdown-divider">
                    </li>
                    <li><a class="dropdown-item" href="#">Perfil</a></li>
                  </ul>
                </li>
              </ul>
              <form class="d-flex mt-3" role="search">
                <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-success" type="submit">Search</button>
              </form>
            </div>
          </div>
        </div>
    </nav>-->
    
      <!--Barra de navegacion-->
    <nav class="navbar bg-dark border-bottom border-body" data-bs-theme="dark">
        <!-- Navbar content -->

                <nav class="navbar navbar-expand-lg bg-body-tertiary">
            <div class="container-fluid">
              <a class="navbar-brand" href="#">Navbar</a>
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarNavDropdown">
                <ul class="navbar-nav">
                  <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="#">Home</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#">Features</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#">Pricing</a>
                  </li>
                  <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                      Dropdown link
                    </a>
                    <ul class="dropdown-menu">
                      <li><a class="dropdown-item" href="#">Action</a></li>
                      <li><a class="dropdown-item" href="#">Another action</a></li>
                      <li><a class="dropdown-item" href="#">Something else here</a></li>
                    </ul>
                  </li>
                </ul>
              </div>
            </div>
          </nav>
     </nav>

    
    <!-- fin de la navegacion-->
      <div class="todo">
      <header class="yotin">
       
        <h1>Practica</h1>
      </header>

            <section id="hero">
              <div id="heroCarousel" data-bs-interval="3000" class="carousel slide carousel-fade" data-bs-ride="carousel">
          
                <ol class="carousel-indicators" id="hero-carousel-indicators"></ol>
          
                <div class="carousel-inner" role="listbox">
                                              <!-- Slide 1 -->
                  <div class="carousel-item active" style="background-image: url(asset/img/astin.jpg)">
                    <div class="carousel-container">
                      <div class="container">
                        <h2 class="animate__animated animate__fadeInDown">Bienvenidos a El Liceo Astin jacobo</h2>
                        <p class="animate__animated animate__fadeInUp">Tenemos las mejores areas de Estudios en Municipio.              <a href="#about" class="btn-get-started animate__animated animate__fadeInUp scrollto">Saber Mas</a>
                      </div>
                    </div>
                  </div>
                                    <!-- Slide 1 -->
                  <div class="carousel-item active" style="background-image: url(images/61a79fee0796de1211254c40d684a481.png)">
                    <div class="carousel-container">
                      <div class="container">
                        <h2 class="animate__animated animate__fadeInDown">hello</h2>
                        <p class="animate__animated animate__fadeInUp">Equipos con todas las ganas de atenderlos              <a href="#about" class="btn-get-started animate__animated animate__fadeInUp scrollto">Saber Mas</a>
                      </div>
                    </div>
                  </div>
                                    <!-- Slide 1 -->
                  <div class="carousel-item active" style="background-image: url(asset/img/astin.jpg)">
                    <div class="carousel-container">
                      <div class="container">
                        <h2 class="animate__animated animate__fadeInDown">Bienvenidos a El Liceo Astin jacobo</h2>
                        <p class="animate__animated animate__fadeInUp">Tenemos las mejores areas de Estudios en Municipio.              <a href="#about" class="btn-get-started animate__animated animate__fadeInUp scrollto">Saber Mas</a>
                      </div>
                    </div>
                  </div>
            
                </section>

            </section> 

             <!--<div class="image-container">
              <p> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed nec nisi rutrum, ullamcorper libero vel, sagittis elit. Proin consectetur lorem quis vestibulum. Duis at nisi ut ligula commodo volutpat. Donec vel risus est. Nulla eget tellus a ipsum pulvinar lacinia et vel neque. Curabitur in efficitur eros. Quisque commodo eros et eros placerat interdum. Cras porttitor massa ut tincidunt consectetur1Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed nec nisi rutrum, ullamcorper libero vel, sagittis elit. Proin consectetur lorem quis vestibulum. Duis at nisi ut ligula commodo volutpat. Donec vel risus est. Nulla eget tellus a ipsum pulvinar lacinia et vel neque. Curabitur in efficitur eros. Quisque commodo eros et eros placerat interdum. Cras porttitor massa ut tincidunt consectetur.</p>
        
              
            </div>-->

            <main id="main">
              <!-- ======= About Section ======= -->
              <section id="about" class="about">
                <div class="container" data-aos="fade-up">
                          <div class="section-title">
                    <h2>Acerca</h2>
                    <p>Acerca del Liceo Astin Jacobo Fe y Alegria</p>
                  </div>
                  <div class="row content">
                              <div class="col-lg-6">
                      <p>
                        Somos una empresa que se creó en abril  del 2011 en San Pedro de Macoris. Estamos acreditados bajo la norma ISO 17025. En nuestros programas de crecimiento sostenido, tenemos sucursales en Sarazota Florida, Zona occidental de  Santo Domingo y en las Americas.            </p>
                      <ul>
                        <li><i class="ri-check-double-line"></i> Tenemos acreditación internacional bajo la norma ISO-17025.</li>
                        <li><i class="ri-check-double-line"></i> Ofrecemos servicios express 24/7.</li>
                      </ul>
                    </div>
                    <div class="col-lg-6 pt-4">
                      <ul>
                        <li><i class="ri-check-double-line"></i> Tenemos nuestro equipo de apoyo técnico en Estados Unidos.</li>
                        <li><i class="ri-check-double-line"></i>Somos la solución definitiva a tus nececidades de calibración e instrumentación.</li>
                      </ul>
                      <!--<a href="#" class="btn-learn-more">Learn More</a>-->
                    </div>
                              </div>
                </div>
              </section><!-- End About Section -->
              <!-- ======= Counts Section ======= -->
              <section id="counts" class="counts">
                <div class="container" data-aos="fade-up">
                  <div class="row no-gutters">
                    <div class="col-lg-3 col-md-6 d-md-flex align-items-md-stretch">
                      <div class="count-box">
                        <i class="bi bi-emoji-smile"></i>
                        <span data-purecounter-start="0" data-purecounter-end="1400" data-purecounter-duration="2" class="purecounter"></span>
                        <p><strong>Personal</strong> De nuestro Centro</p>
                        <a href="#testimonials">saber mas &raquo;</a>
                      </div>
                    </div>
                    <div class="col-lg-3 col-md-6 d-md-flex align-items-md-stretch">
                      <div class="count-box">
                        <i class="bi bi-journal-richtext"></i>
                        <span data-purecounter-start="0" data-purecounter-end="300" data-purecounter-duration="4" class="purecounter"></span>
                        <p><strong>Productos</strong> y servicios a tu alcance</p>
                        <a href="#services">Saber mas &raquo;</a>
                      </div>
                    </div>
                    <div class="col-lg-3 col-md-6 d-md-flex align-items-md-stretch">
                      <div class="count-box">
                        <i class="bi bi-headset"></i>
                        <span data-purecounter-start="0" data-purecounter-end="24" data-purecounter-duration="5" class="purecounter"></span>
                        <p><strong>Horas de servicios</strong> ininterrumpidos 24/7</p>
                        <a href="#contact">Saber mas &raquo;</a>
                      </div>
                    </div>
                    <div class="col-lg-3 col-md-6 d-md-flex align-items-md-stretch">
                      <div class="count-box">
                        <i class="bi bi-people"></i>
                        <span data-purecounter-start="0" data-purecounter-end="550" data-purecounter-duration="3" class="purecounter"></span>
                        <p><strong>El Trabajo duro</strong> es nuestra marca registrada</p>
                        <a href="#team">Saber mas &raquo;</a>
                      </div>
                    </div>
          
                  </div>
          
                </div>
              </section><!-- End Counts Section -->
              <section id="why-us" class="why-us container-md m-5 section-bg">
                <div class="container" data-aos="fade-up">
                  <div class="row">
                    <div class="col-16 m-auto text-center "  data-aos="zoom-in" data-aos-delay="100">
                    <div class="content">
                        <h3><strong>Conózcanos</strong> </h3>
                        <p><strong>
                          Aprenda más sobre nosotros aquí...
                    </strong></p>
                      </div>
                    <!--<a href="https://youtu.be/jW_8WEcD1lE" class="venobox play-btn mb-4" data-vbtype="video" data-autoplay="true"></a>-->
                    <video width="95%" height="95%" controls loop muted autoplay >
                        <source src="videos/Presentacion.mp4" type="video/mp4">
                        <source src="videos/Presentacion.wmv" type="video/wmv">
                        <source src="videos/Presentacion.wmv" type="video/ogg">
                        
                      Your browser does not support the video tag.
                    </video>
                    </div>
                  </div>
                </div>
              </section>
            <br>
              <!-- ======= Why Us Section ======= -->
              <section id="why-us" class="why-us section-bg">
                <div class="container-fluid" data-aos="fade-up">
          
                  <div class="row">
                                          
          
                    <div class="col-lg-5 align-items-stretch video-box" style="background-image: url(admin/assets/fotos/porquenosotros.jpeg);" data-aos="zoom-in" data-aos-delay="100">
                    <!--<a href="https://youtu.be/jW_8WEcD1lE" class="venobox play-btn mb-4" data-vbtype="video" data-autoplay="true"></a>-->
                    <!--<video width="400" height="370" controls >
                        <source src="videos/Presentacion.wmv" type="video/wmv">
                        <source src="videos/Presentacion.wmv" type="video/ogg">
                        <source src="videos/Presentacion.mp4" type="video/mp4">
                      Your browser does not support the video tag.
                    </video>-->
                    </div>
          
                    <div class="col-lg-7 d-flex flex-column justify-content-center align-items-stretch">
          
                      <div class="content">
                        <h3>¿Por qué Nosotros? <strong>Las Mejores Razones Aquí OK</strong></h3>
                        <p>
                          Proveemos calibraciones que cumplen con los requerimientos de la norma ISO-9001. Todos nuestros patrones son completamente trazables a un estándar nacional o Internacional.            </p>
                      </div>
                                  <div class="accordion-list">
                                      <ul>
                          <li>
                            <a data-bs-toggle="collapse" class="collapse" data-bs-target="#accordion-list-1"><span>01</span> ¿Por qué elegirnos? <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
                            <div id="accordion-list-1" class="collapse " data-bs-parent=".accordion-list">
                              <p>
                                Porque garantizamos nuestro trabajo apegados a las normas de lugar.                    </p>
                            </div>
                          </li>
          
                          <li>
                            <a data-bs-toggle="collapse" data-bs-target="#accordion-list-2" class="collapsed"><span>02</span> ¿Por qué elegirnos? <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
                            <div id="accordion-list-2" class="collapse" data-bs-parent=".accordion-list">
                              <p>
                                Porque contamos con certificaciones nacional e internacional.                    </p>
                            </div>
                          </li>
          
                          <li>
                            <a data-bs-toggle="collapse" data-bs-target="#accordion-list-3" class="collapsed"><span>03</span> ¿Por qué elegirnos? <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
                            <div id="accordion-list-3" class="collapse" data-bs-parent=".accordion-list">
                              <p>
                                Porque ofrecemos servicios express 24/7 de alta calidad y mejores precios.                    </p>
                            </div>
                          </li>
          
                        </ul>
                                      </div>
          
                    </div>
                    
          
                  </div>
          
                </div>
              </section><!-- End Why Us Section -->
              
          
              <!-- ======= Services Section ======= -->
              <section id="services" class="services">
                <div class="container" data-aos="fade-up">
                          <div class="section-title">
                    <h2>Servicios</h2>
                    <p>Revise aqui Nuestros Servicios</p>
                  </div>
          
                  <div class="row">
                    
          
                    <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-md-0" data-aos="zoom-in" data-aos-delay="200">
                      <div class="icon-box">
                        <div class="icon"><img width="80px" src=admin/assets/fotos/servicios/otrosServicios.jpeg ></div>
                        <h4><a href="">Calibraciones de Equipos de Medidas </a></h4>
                        <p>Empresa de calibración acreditada bajo la norma ISO-17025 por Perry Jhonson Labs. número de certificación L12-176</p>
                      </div>
                    </div>
                    
          
                    <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-md-0" data-aos="zoom-in" data-aos-delay="200">
                      <div class="icon-box">
                        <div class="icon"><img width="80px" src=admin/assets/fotos/servicios/testers.jpeg ></div>
                        <h4><a href="">Ventas de equipos de medición calibrados bajo la norma ISO-17025</a></h4>
                        <p>Medidores de humedad y temperatura.
          Medidores de presión, sonda de temperatura, controladores de temperatura, balazas, medidores de refracción, viscocímetro, etc.</p>
                      </div>
                    </div>
                    
          
                    <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-md-0" data-aos="zoom-in" data-aos-delay="200">
                      <div class="icon-box">
                        <div class="icon"><img width="80px" src=admin/assets/fotos/servicios/masservicios.jpeg ></div>
                        <h4><a href="">Entrenamiento y Asesorías</a></h4>
                        <p>Ofecemos entrenamiento para certificación de técnicos en el area de calibraciones de todo tipo de instrumentación de medida.
          También ofrecemos asesoría para fines de preparación, maduración y certificación de la norma ISO-9001 para todo tipo de empresa, tanto de servicio, manufactura y diseño.</p>
                      </div>
                    </div>
                  </div>
                  
          
                </div>
              </section><!-- End Services Section -->
             
          
              <!-- ======= Testimonials Section ======= -->
              <section id="testimonials" class="testimonials section-bg">
                <div class="container" data-aos="fade-up">
          
                  <div class="section-title">
                    <h2>Nuestro personal</h2>
                    <p>Conoce a nuestro personal</p>
                  </div>
          
                  <div class="testimonials-slider swiper" data-aos="fade-up" data-aos-delay="100">
                    <div class="swiper-wrapper">
                                               <div class="swiper-slide">
                        <div class="testimonial-wrap">
                          <div class="testimonial-item">
                            <!--<img src="assets/img/testimonials/testimonials-1.jpg" class="testimonial-img" alt="">-->
          
                            <h3>Director/a</h3>
                            <h4>Encargado del centro</h4>
                            <p>
                              <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                              <strong>Meri.</strong> <br> Es la encargada de centro en general y responsable de todo actividad
                                                <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                            </p>
                          </div>
                        </div>
                      </div><!-- End testimonial item -->
                                  <div class="swiper-slide">
                        <div class="testimonial-wrap">
                          <div class="testimonial-item">
                            <!--<img src="assets/img/testimonials/testimonials-1.jpg" class="testimonial-img" alt="">-->
          
                            <h3>Sub Director</h3>
                            <h4>Sub encargado del centro</h4>
                            <p>
                              <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                              De verdad que sus servicios me han hecho la vida más fácil, gracias a la calidad de su servicio mis herramientas están en condiciones óptimas.                    <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                            </p>
                          </div>
                        </div>
                      </div><!-- End testimonial item -->
                                  <div class="swiper-slide">
                        <div class="testimonial-wrap">
                          <div class="testimonial-item">
                            <!--<img src="assets/img/testimonials/testimonials-1.jpg" class="testimonial-img" alt="">-->
          
                            <h3>Joan marte </h3>
                            <h4>Tecnico Calidad </h4>
                            <p>
                              <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                              Estoy altamente complacido con el servicio ofrecido por mrcalibrations                     <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                            </p>
                          </div>
                        </div>
                      </div><!-- End testimonial item -->
                                  <div class="swiper-slide">
                        <div class="testimonial-wrap">
                          <div class="testimonial-item">
                            <!--<img src="assets/img/testimonials/testimonials-1.jpg" class="testimonial-img" alt="">-->
          
                            <h3>Natanael De Leon</h3>
                            <h4>Técnico Electrónico </h4>
                            <p>
                              <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                              Me complace recomendar los servicios de Mrcalibrations, les aseguro que no se arrepentirán.                    <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                            </p>
                          </div>
                        </div>
                      </div>
          
              </section><!-- End Testimonials Section -->
          
              <!-- divicion-->
          
              <!-- ======= Team Section ======= -->
              <section id="team" class="team section-bg">
                <div class="container" data-aos="fade-up">
          
                  <div class="section-title">
                    <h>Equipo de trabajo</h2>
                    <p>Nuestro Equipo</p>
                  </div>
          
                  <div class="row">
                            
                      <div class="col-xl-3 col-lg-4 col-md-6">
                      <div class="member" data-aos="zoom-in" data-aos-delay="100">
                        <img src="admin/assets/fotos/equipo/Multímetro" class="img-fluid" alt="">
                        <div class="member-info">
                          <div class="member-info-content">
                            <h4>Multímetro</h4>
                            <span>Medidor de tensiones</span>
                          </div>
                          <div class="social">
                            <a href=""><i class="bi bi-twitter"></i></a>
                            <a href=""><i class="bi bi-facebook"></i></a>
                            <a href=""><i class="bi bi-instagram"></i></a>
                            <a href=""><i class="bi bi-linkedin"></i></a>
                          </div>
                        </div>
                      </div>
                    </div>
                     
                      <div class="col-xl-3 col-lg-4 col-md-6">
                      <div class="member" data-aos="zoom-in" data-aos-delay="100">
                        <img src="admin/assets/fotos/equipo/Osciloscopio" class="img-fluid" alt="">
                        <div class="member-info">
                          <div class="member-info-content">
                            <h4>Osciloscopio</h4>
                            <span>Multiuso</span>
                          </div>
                          <div class="social">
                            <a href=""><i class="bi bi-twitter"></i></a>
                            <a href=""><i class="bi bi-facebook"></i></a>
                            <a href=""><i class="bi bi-instagram"></i></a>
                            <a href=""><i class="bi bi-linkedin"></i></a>
                          </div>
                        </div>
                      </div>
                    </div>
                     
                      <div class="col-xl-3 col-lg-4 col-md-6">
                      <div class="member" data-aos="zoom-in" data-aos-delay="100">
                        <img src="admin/assets/fotos/equipo/Flujo de Aire" class="img-fluid" alt="">
                        <div class="member-info">
                          <div class="member-info-content">
                            <h4>Flujo de Aire</h4>
                            <span>Medidor</span>
                          </div>
                          <div class="social">
                            <a href=""><i class="bi bi-twitter"></i></a>
                            <a href=""><i class="bi bi-facebook"></i></a>
                            <a href=""><i class="bi bi-instagram"></i></a>
                            <a href=""><i class="bi bi-linkedin"></i></a>
                          </div>
                        </div>
                      </div>
                    </div>
                     
                      <div class="col-xl-3 col-lg-4 col-md-6">
                      <div class="member" data-aos="zoom-in" data-aos-delay="100">
                        <img src="admin/assets/fotos/equipo/Manómetro" class="img-fluid" alt="">
                        <div class="member-info">
                          <div class="member-info-content">
                            <h4>Manómetro</h4>
                            <span>Diseñador</span>
                          </div>
                          <div class="social">
                            <a href=""><i class="bi bi-twitter"></i></a>
                            <a href=""><i class="bi bi-facebook"></i></a>
                            <a href=""><i class="bi bi-instagram"></i></a>
                            <a href=""><i class="bi bi-linkedin"></i></a>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
          
                </div>
              </section><!-- End Team Section -->
          
              <!-- ======= Contact Section ======= -->
              <section id="contact" class="contact section-bg">
                <div class="container" data-aos="fade-up">
                  <div class="section-title">
                    <h2>Contacto</h2>
                    <p>Contáctenos</p>
                  </div>
                  <div class="row">
                    <div class="col-lg-6">
                      <div class="row">
                        <div class="col-md-12">
                          <div class="info-box">
                            <i class="bx bx-map"></i>
                            <h3>Nuestra Dirección</h3>
                            <p>Av. Independencia #177 Plaza 30/30 2do nivel SPM Rep.Dom.</p>
                            <p>Calle Rosario #22. Plaza Lucía apto 2, el Antillano Santo Domingo</p>
                            <p>4ta Avenida,Suite #7 Sarasota Florida USA </p>
                          </div>
                        </div>
                        <div class="col-md-6">
                          <div class="info-box mt-4">
                            <i class="bx bx-envelope"></i>
                            <h3>Envianos un correo</h3>
                            <p>mrelectronicsdr@gmail.com<br>administracion@mrcalibrationsrl.com <br>O Dejanos un mensaje en el formulario de Contacto</p>
                          </div>
                        </div>
                        <div class="col-md-6">
                          <div class="info-box mt-4">
                            <i class="bx bx-phone-call"></i>
                            <h3>Llámenos</h3>
                            <p>Oficina: 809 526 6736<br> Cel: 809 710 2827 <br>USA Tel: 51 876 8603</p>
                          </div>
                        </div>
                      </div>
                    </div>
          
          
          
          
          
                
          
                  </div>
          
                </div>
              </section><!-- End Contact Section -->
          
            </main><!-- End #main -->
          

            
            
<footer id="footer">

  <div class="footer-top">

    <div class="container">
      <div class="row">

        <div class="col-lg-12 ">
          <div class="footer-info">
            <div class="social-links mt-6">
              <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
              <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
              <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
            <!--  <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>-->
              <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
            </div>
          </div>
        </div>
<!--
        <div class="col-lg-2 col-md-6 footer-links">
          <h4>Useful Links</h4>
          <ul>
            <li><i class="bx bx-chevron-right"></i> <a href="#">Home</a></li>
            <li><i class="bx bx-chevron-right"></i> <a href="#">About us</a></li>
            <li><i class="bx bx-chevron-right"></i> <a href="#">Services</a></li>
            <li><i class="bx bx-chevron-right"></i> <a href="#">Terms of service</a></li>
            <li><i class="bx bx-chevron-right"></i> <a href="#">Privacy policy</a></li>
          </ul>
        </div>

        <div class="col-lg-2 col-md-6 footer-links">
          <h4>Our Services</h4>
          <ul>
            <li><i class="bx bx-chevron-right"></i> <a href="#">Web Design</a></li>
            <li><i class="bx bx-chevron-right"></i> <a href="#">Web Development</a></li>
            <li><i class="bx bx-chevron-right"></i> <a href="#">Product Management</a></li>
            <li><i class="bx bx-chevron-right"></i> <a href="#">Marketing</a></li>
            <li><i class="bx bx-chevron-right"></i> <a href="#">Graphic Design</a></li>
          </ul>
        </div>

        <div class="col-lg-4 col-md-6 footer-newsletter">
          <h4>Our Newsletter</h4>
          <p>Tamen quem nulla quae legam multos aute sint culpa legam noster magna</p>
          <form action="" method="post">
            <input type="email" name="email"><input type="submit" value="Subscribe">
          </form>

        </div>

      </div>
    </div>

  </div>
-->
  <div class="container">
    <div class="copyright">
      &copy; Copyright <strong><span>Astin Jacobo fe y alegria</span></strong>.
    </div>
    <div class="credits">
      <!-- All the links in the footer should remain intact. -->
      <!-- You can delete the links only if you purchased the pro version. -->
      <!-- Licensing information: https://bootstrapmade.com/license/ -->
      <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/multi-responsive-bootstrap-template/ -->
      Desarrollado por: <a href="http://Activity-Entertainment.com/" target="_blank">Activity-Entertainment</a>
    </div>
  </div>
</footer><!-- End Footer -->
      
      
      
      
      
        </div>
      <script src="bootstrap/js/bootstrap.min.js"></script>
      <script src="bootstrap/js/bootstrap.bundle.min.js"></script>
</body>
</html>