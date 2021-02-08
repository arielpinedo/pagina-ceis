

<nav class="navbar navbar-expand-lg navbar-dark bg-danger fixed-top">
        <a class="navbar-brand font-weight-bold" href="http://127.0.0.1/website_mino/">Ceis Deis</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
      
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item active">
              <a class="nav-link" href="http://127.0.0.1/website_mino/">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Cursos
              </a>
              <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href=<?php echo baseUrl( 'ingles_index.php' )?>>Ingles</a>
                <a class="dropdown-item" href="<?php echo baseUrl( 'guarani_index.php' )?>">Guarani</a>
                <a class="dropdown-item" href="<?php echo baseUrl( 'quechua_index.php' )?>">Quechua</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="#">Modalidad de ingreso</a>
              </div>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="<?php echo baseUrl( 'precios.php' )?>">Precios</a>
            </li>
            <li class="nav-item">
                <a class="nav-link font-weight-bold" href="<?php echo baseUrl( 'Modules/logins/login_main.php' ) ?>">Login</a>
              </li>
          </ul>
          
        </div>
      </nav> <br>