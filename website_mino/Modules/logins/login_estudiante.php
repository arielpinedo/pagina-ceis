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
    <title>Login Estudiante</title>
</head>
<body class="bg-dark">

    <div class="container pt-5">
        <div class="row justify-content-center">
            <div class="col-12 col-md-5">
                <div class="card">
                    <div class="card-body">
                        <h1>Estudiante</h1>
                            <form action="">
                                <div class="form-group">
                                    <label for="">Email</label>
                                    <input type="email" class="form-control" required placeholder="example@example.com">
                                </div>
        
                                <div class="form-group">
                                    <label for="">Password</label>
                                    <input type="password" maxlength="20" minlength="8" class="form-control" required placeholder="Password">
                                </div>
        
                                <button type="submit" class="btn btn-primary mx-auto" id="btn-login">Login</button>
                                <a href="<?php echo baseUrl ( 'Modules/Estudiante/index_estudiante.php' ) ?>" class="btn btn-outline-info" role="button">Estudiante</a>
                            </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

<script src="js/jquery-3.5.1.slim.min.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/bootstrap.min.js"></script>

<script src="js/parsley.js"></script>
<script src="js/script.js"></script>
    
</body>

</html>




