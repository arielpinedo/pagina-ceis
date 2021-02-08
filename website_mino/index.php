<?php 
  require 'functions.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="<?php echo baseUrl( 'css/bootstrap.css' )?>">
    
    <title>Cursos de Extension de Idiomas DUE-UAGRM</title>
</head>
<body>

        <!--seccion barra de navegacion-->
    
      <?php
        require 'navbar.php';
      ?>

        <!--seccion imagenes sliders-->
      <div class="container pt-5">
        <div class="row">
            <div class="col">
                <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                    <ol class="carousel-indicators">
                      <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                      <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                      <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                      <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
                    </ol>
                    <div class="carousel-inner">
                      <div class="carousel-item active">
                        <img src="img/slider 1.jpg" class="d-block w-100" alt="...">
                      </div>
                      <div class="carousel-item">
                        <img src="img/slider 2.jpg" class="d-block w-100" alt="...">
                      </div>
                      <div class="carousel-item">
                        <img src="img/slider 3.jpg" class="d-block w-100" alt="...">
                      </div>
                      <div class="carousel-item">
                        <img src="img/slider 4.jpg" class="d-block w-100" alt="...">
                      </div>
                    </div>
                    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                      <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                      <span class="carousel-control-next-icon" aria-hidden="true"></span>
                      <span class="sr-only">Next</span>
                    </a>
                  </div>
            </div>
        </div>
      </div>



        <!--seccion noticias-->
      <section class="container">
          <div class="row">
              <h2 class="col-12 text-center">
                  <span class="text-warning h6 text-uppercase">hola</span> <br>
                  <span class="text-capitalize">good times roll</span>
              </h2>
              <p class="col-12 col-md-6">
                  Lorem ipsum dolor sit, amet consectetur adipisicing elit. Culpa quaerat sapiente minus, pariatur laboriosam, error rem cupiditate mollitia quia hic quis architecto quisquam vitae voluptatem eaque temporibus. Quas, temporibus ut.
              </p>

              <p class="col-12 col-md-6">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Sapiente molestiae perspiciatis debitis facilis nulla harum recusandae modi, asperiores reprehenderit culpa. Nesciunt tempora fuga maxime optio, enim perspiciatis at officiis dignissimos iusto impedit. Eligendi pariatur, laboriosam omnis qui totam laborum aperiam quae expedita aliquid delectus maiores alias at facere eius exercitationem?
              </p>
              
              <!--CardsInfo x3-->
              <div class="container p-4">
                <div class="row justify-content-center">
                  <div class="col-12 mb-3 col-md-6 col-lg-4">
                  <div class="card" style="width: 18rem;">
                    <img src="img/slider 5.jpg" class="card-img-top" alt="...">
                      <div class="card-body">
                        <h5 class="card-title">Ingles</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <a href="<?php echo baseUrl( 'ingles_index.php' )?>" class="btn btn-primary">Ver mas...</a>
                      </div>
                  </div>
                </div>

                <div class="col-12 mb-3 col-md-6 col-lg-4">
                  <div class="card" style="width: 18rem;">
                    <img src="img/slider 7.jpg" class="card-img-top" alt="...">
                      <div class="card-body">
                        <h5 class="card-title">Guarani</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <a href="<?php echo baseUrl( 'guarani_index.php' )?>" class="btn btn-primary">Ver mas...</a>
                      </div>
                  </div>
                </div>

                <div class="col-12 mb-3 col-md-6 col-lg-4">
                  <div class="card" style="width: 18rem;">
                    <img src="img/slider 3.jpg" class="card-img-top" alt="...">
                      <div class="card-body">
                        <h5 class="card-title">Quechua</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <a href="<?php echo baseUrl( 'quechua_index.php' )?>" class="btn btn-primary">Ver mas...</a>
                      </div>
                  </div>
                </div>
                </div>
              </div>

              <!--Info x4-->
              <div class="container">
                <div class="row">
                  <div class="col-3 text-center">
                    <h3 class="text-warning h6">What?</h3>
                    <p class="font-weight-bold text-capitalize">Julio 20</p>
                  </div>

                  <div class="col-3 text-center">
                    <h3 class="text-warning h6">Where?</h3>
                    <p class="font-weight-bold text-capitalize">Santa cruz</p>
                  </div>

                    <div class="col-3 text-center">
                        <h3 class="text-warning h6">How long?</h3>
                        <p class="font-weight-bold text-capitalize">2 months</p>
                    </div>
                    <div class="col-3 text-center">
                        <h3 class="text-warning h6">How much?</h3>
                        <p class="font-weight-bold text-capitalize">250 Bs</p>
                  </div>
                </div>
              </div>

               <button class="col-auto btn btn-warning text-white mx-auto my-4 text-capitalize">
                   Inscribirse ahora!
               </button>
          </div>
      </section>

      <!--seccion footer-->
      <?php
        require 'footer.php'
      ?>

    <script src="js/jquery-3.5.1.slim.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
</body>
</html>