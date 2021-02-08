<?php 
  require '../../functions.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?php echo baseUrl( 'css/bootstrap.css' )?>">
    <title>Login Main</title>
</head>
<body>
      
    <div class="container mx-auto my-5" style="height: 100%;">
        <div class="card text-center" style="width: 25rem; margin: 0 auto;">
            <div class="card-header">
                <h1 class="text-danger font-weight-bold">
                    Inicio de sesion
                </h1>
            </div>
                <h5 class="card-title mt-4">Eliga su tipo de cuenta</h5>
                <form action="" class="">
                    <a href="<?php echo baseUrl ( 'Modules/logins/login_estudiante.php' ) ?>" class="btn btn-outline-success" role="button">Estudiante</a>
                    <a href="<?php echo baseUrl ( 'Modules/logins/login_docente.php' ) ?>" class="btn btn-outline-success" role="button">Docente</a>
                    <a href="<?php echo baseUrl ( 'Modules/logins/login_administrativo.php' ) ?>" class="btn btn-outline-success" role="button">Administrativo</a>
                </form><br>
            <div class="card-footer">
                Powered by Systemariel
            </div>
        </div>
    </div>

    
    
    <script src="js/jquery-3.5.1.slim.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
</body>
</html>