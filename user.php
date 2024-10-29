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


 
include('menu.php');
 ?>

<div class="container_all" id="container__all">
        <div class="cover">

            <div class="bg_color"></div>
            <div class="wave w1"></div>
            <div class="wave w2"></div>

            </div>
        </div>

<section id="services" class="services">
                <div class="container" data-aos="fade-up">
                          <div class="section-title">
                    <h2>User</h2>

                    <p>Revise aqui los datos del Usuario</p>
                  </div>
          
                  <div class="row">
                    
          
                    <div class="col-lg-6 col-md-6 d-flex align-items-stretch mt-4 mt-md-0" data-aos="zoom-in" data-aos-delay="200">
                      <div class="icon-box">
                        <div class="icon"><i class="fa-solid fa-user"></i></div>
                        <h2><a href="">Usuario: <?php echo  $_SESSION['user']; ?> </a></h2>
                        <div>
                        <h4><strong>Nombre Completo:</strong> <?php echo $_SESSION['nombre']; ?> </h4>
                        </div>
                        <div>
                        <h4> <strong>Correo:</strong> <?php echo $_SESSION['mail']; ?> </h4>
                        </div>
                      </div>
                    </div>
                    
          
                  
          
                </div>
              </section><!-- End Services Section -->
              <?php require_once('footer.php') ?>
