<?php 
  require 'functions.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="<?php echo baseUrl( 'css/bootstrap.css' )?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cursos de Extension de Idiomas DUE-UAGRM</title>
</head>
<body>

<?php 
  require 'navbar.php';
?> 

 <!--seccion imagenes sliders-->
<div class="container p-5">
    <h1>Cursos de ingles</h1>

    <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
            <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active">
            <img src="img/slider 5.jpg" class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block">
                <h5>First slide label</h5>
                <p>Some representative placeholder content for the first slide.</p>
            </div>
            </div>
            <div class="carousel-item">
            <img src="img/slider 6.jpg" class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block">
                <h5>Second slide label</h5>
                <p>Some representative placeholder content for the second slide.</p>
            </div>
            </div>
            <div class="carousel-item">
            <img src="img/slider 7.jpg" class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block">
                <h5>Third slide label</h5>
                <p>Some representative placeholder content for the third slide.</p>
            </div>
            </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
</div>

<div class="container pb-4">
    <div class="row">
        <div class="col-12 text-center">
            <h2>Titulo</h2>
        </div>
        <div class="col-12 col-md-6">
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. A facilis libero possimus nam voluptatem temporibus odit officiis sequi fugiat assumenda, voluptatibus tempore eius quasi, repellat consequatur fugit iusto amet ad dolore laudantium iure. Ipsam officiis expedita reiciendis rem optio nulla aliquam voluptatibus quae veniam laborum illo esse aliquid, natus cumque?</p>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sapiente, ad quis eligendi veniam dolorem tempore delectus ullam beatae. Perferendis, assumenda.</p>
        </div>

        <div class="col-12 col-md-6">
        <table class="table table-bordered table-striped table-hover">
            <thead class="btn-primary">
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">First</th>
                        <th scope="col">Last</th>
                        <th scope="col">Handle</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th scope="row">1</th>
                        <td>Mark</td>
                        <td>Otto</td>
                        <td>@mdo</td>
                    </tr>

                    <tr>
                        <th scope="row">2</th>
                        <td>Jacob</td>
                        <td>Thornton</td>
                        <td>@fat</td>
                    </tr>

                    <tr>
                        <th scope="row">3</th>
                        <td>Larry</td>
                        <td>the Bird</td>
                        <td>@twitter</td>
                    </tr>

                    <tr>
                        <th scope="row">4</th>
                        <td>Larry</td>
                        <td>the Bird</td>
                        <td>@twitter</td>
                    </tr>

                    <tr>
                        <th scope="row">5</th>
                        <td>Larry</td>
                        <td>the Bird</td>
                        <td>@twitter</td>
                    </tr>
                </tbody>
            </table>
        </div>

    </div>
</div>
<?php 
  require 'footer.php';
?>
    <script src="js/jquery-3.5.1.slim.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
</body>
</html>