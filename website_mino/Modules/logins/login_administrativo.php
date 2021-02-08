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
    <title>Login Administrativo</title>
</head>
<body class="bg-dark">

    <?php
        require '../../navbar.php'
    ?>
    <div class="container pt-5">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-5">
                <div class="card">
                    <div class="card-body">
                        <h1>Administrativo</h1>
                            <form action="">
                                <div class="form-group">
                                    <label for="">Codigo</label>
                                    <input type="text" class="form-control" required placeholder="123456789">
                                </div>
        
                                <div class="form-group">
                                    <label for="">Password</label>
                                    <input type="password" maxlength="20" minlength="8" class="form-control" required placeholder="Password">
                                </div>
        
                                <button type="submit" class="btn btn-primary" id="btn-login">Login</button>
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