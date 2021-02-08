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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css">
    <title>Document</title>
</head>
<body>
<?php
    require '../../navbar.php';
?>

<div class="vertical-nav bg-white">
    <div class="py-4 px-3 mb-4 bg-light">
        <div class="media d-flex align-items-center">
            <img class="mr-3 rounded-circle img-thumbnail shadow-sm" width="80" height="80" src="" alt="">
                <div class="media-body">
                    <h4 class="m-0">Ariel Pinedo</h4>
                    <p class="font-weight-normal text-muted mb-0">Web Developer</p>
                </div>
        </div>
    </div>
</div>

<div class="page-content p-5">
    <button type="button" id="sidebarCollapse" class="btn btn-light bg-white rounded-pill shadow-sm px-4 mb-4">
        <i class="fa fa-bars mr-2"></i>
        <small class="text-uppercase">Toggle</small>
    </button>

    <h2 class="display-4 text-dark">Boostrap vertical nav</h2>
    <p class="lead text-dark mb-0">Build a fixed sidebar usig Boostrap 4 vertical navigation and media objects</p>

    

    <div class="row text-dark">
        <div class="col-lg-7">
            <p class="lead">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Vitae temporibus consectetur minus consequatur doloribus aliquid, quaerat sunt ducimus nihil. Autem tempora ea eum nobis quas ipsam sunt minima numquam earum! Fugiat numquam repellendus aspernatur nostrum officia hic architecto molestias, eos nemo nam praesentium velit consequatur natus consectetur. Quos, laudantium ullam!
            </p>
            <p class="lead">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquid delectus cumque aut cupiditate commodi expedita at ipsa quibusdam, odit, incidunt numquam corrupti nemo ad deleniti ipsam earum, exercitationem nisi accusamus possimus maiores veniam similique! Praesentium, asperiores. Labore neque ratione exercitationem, corrupti, hic sapiente totam doloremque magnam deleniti, eos magni perspiciatis quis consequatur. Optio laboriosam molestiae magnam repudiandae asperiores vero molestias!
            </p>
        </div>
    </div>
</div>

    <script src="<?php echo baseUrl( 'js/jquery-3.5.1.slim.min.js' )?>"></script>
    <script src="<?php echo baseUrl('js/popper.min.js ')?>"></script>
    <script src="<?php echo baseUrl('js/bootstrap.min.js')?>"></script>
</body>
</html>