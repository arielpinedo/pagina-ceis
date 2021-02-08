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

    <title>Precios</title>
</head>
<body>

    <?php
        require 'navbar.php';
    ?>

    <div class="container pt-5">
            <h1>Detalles de montos a cancelar</h1>
            <p>Dichos montos deben ser pagados en caja de campus a concepto de: </p>
        <div class="row font-weight-bold  justify-content-center text-center">
            <div class="col">
                

                <table class="table table-bordered table-striped table-hover">
                    <caption >Para realizar cualquiera de estos trámites debe apersonarse con su respectiva boleta de pago a nuestras oficinas. <a target="_blank" href="http://wa.me/59179883075">Consultas e informacion</a>, o visita nuestra pagina oficial en <a target="_blank" href="https://www.facebook.com/Cursos-de-Extensi%C3%B3n-de-Idiomas-DUE-UAGRM-1544387789201422">FACEBOOK</a></caption>
                    <thead class="btn-warning">
                        <tr>
                            <th scope="col">Nro</th>
                            <th scope="col">Detalle</th>
                            <th scope="col">Monto (Bs.)</th>
                        </tr>
                    </thead>
                        <tbody>
                            <tr>
                                <th scope="row">1</th>
                                <td>Curso de Inglés</td>
                                <td>250</td>
                            </tr>

                            <tr>
                                <th scope="row">2</th>
                                <td>Curso de Inglés para Post-Graduantes</td>
                                <td>250</td>
                            </tr>

                            <tr>
                                <th scope="row">3</th>
                                <td>Curso de Guaraní</td>
                                <td>150</td>
                            </tr>

                            <tr>
                                <th scope="row">4</th>
                                <td>Curso de Quechua</td>
                                <td>250</td>
                            </tr>

                            <tr>
                                <th scope="row">5</th>
                                <td>Certificación</td>
                                <td>50</td>
                            </tr>

                            <tr>
                                <th scope="row">6</th>
                                <td>Examen de Nivel</td>
                                <td>50</td>
                            </tr>

                            <tr>
                                <th scope="row">7</th>
                                <td>Certificado de Notas</td>
                                <td>30</td>
                            </tr>

                            <tr>
                                <th scope="row">8</th>
                                <td>Histórico</td>
                                <td>30</td>
                            </tr>

                            <tr>
                                <th scope="row">9</th>
                                <td>Examen de Nivel </td>
                                <td>250</td>
                            </tr>

                            <tr>
                                <th scope="row">10</th>
                                <td>Examen Final (Inglés, Guaraní, Quechua y Post-Graduantes)</td>
                                <td>100</td>
                            </tr>

                            <tr>
                                <th scope="row">11</th>
                                <td>Legalización Certificado</td>
                                <td>30</td>
                            </tr>
                        </tbody>
                </table>
            </div>
        </div>
    </div>

    <?php
        require 'footer.php';
    ?>
    <script src="<?php echo baseUrl( 'js/jquery-3.5.1.slim.min.js' )?>"></script>
    <script src="<?php echo baseUrl('js/popper.min.js ')?>"></script>
    <script src="<?php echo baseUrl('js/bootstrap.min.js')?>"></script>
</body>
</html>