<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="<?php bloginfo('language');?>">
  <title><?php bloginfo('name');?></title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link rel="stylesheet" href="css/style.css">
  <?php wp_header();?>
</head>
<body>
  <header class="">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
         
          <nav class="navbar navbar-default navbar-latam">
            <div class="container-fluid">
              <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">
                  <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#menu" aria-expanded="false">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                  </button>
                  <a class="navbar-brand" href="#">
                    <img src="img/latam_logo.png" alt="Logo latam" class="logo">
                  </a>
                </div>
                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="menu">
                  <ul class="nav navbar-nav navbar-right">
                    <li><a href="#">Equipo</a></li>
                    <li><a href="#">Blog</a></li>
                    <li><a href="#">Contacto</a></li>
                  </ul>
                </div><!-- /.navbar-collapse -->
              </div><!-- /.container-fluid -->
          </nav>
          
        </div>
        </div>
          <div class="row">
            <div class="col-md-8 col-md-offset-2">
            <h1 class="headline text-center">Comienza una nueva vida y únete al mundo tecnológico</h1>
            <div class="text-center">
                <button class="btn btn-primary btn-lg">Comienza Acá</button>
                <button class="btn btn-success btn-lg">Más info!</button>
            </div>
            <p class="text-center headline-caption">Hay una escasez gigante de desarrolladores en el mundo y más aún en Latinoamérica, se necesitan más desarrolladores y Tú puedes ser uno!</p>
          </div>
        </div>
      </div>
    </header>
    
    
    <section class="block">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <h3 class="text-center">Lorem ipsum dolor sit amet, consectetur adipisicing elit</h3>
            <p class="text-center">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nesciunt, qui, necessitatibus. Perferendis pariatur quae, vero, voluptate saepe soluta itaque rerum earum sit alias harum repudiandae eos molestias magnam iusto, voluptatibus.</p>
            <div class="text-center">
              <img src="img/happy-people.png" alt="" class="people">
            </div>
          </div>
        </div>
      </div>
    </section>
    
    
    <section class="container-fluid seccion-info text-center">
      <h2>NUESTROS CURSOS</h2>
      <div class="col-xs-12 col-sm-6 col-md-3 nopad text-center">
        <label class="image-checkbox">
          <img class="img-responsive cursos-img" src="img/fullstack.png" />
          <input class="select" type="checkbox" name="image[]" value="" />
          <h3>Fullstack</h3>
          <h4>Aprende a construir aplicaciones web desde cero utilizando Ruby on Rails, construye redes sociales, ERPs, CRMs y lo que quieras.</h4>
          <h5 class="course-price" >¥ 65.000</h5>
        </label>
      </div>
      <div class="col-xs-12 col-sm-6 col-md-3 nopad text-center">
        <label class="image-checkbox">
          <img class="img-responsive cursos-img" src="img/front.png" />
          <input class="select" type="checkbox"/>
          <h3>Front-End</h3>
          <h4>Crea páginas web autoadministrable desde cero y consigue trabajo como desarrollador web o freelance</h4>
          <h5 class="course-price" >¥ 50.000</h5>
        </label>
      </div>
      <div class="col-xs-12 col-sm-6 col-md-3 nopad text-center">
        <label class="image-checkbox">
          <img class="img-responsive cursos-img" src="img/android.png" />
          <input class="select" type="checkbox"/>
          <h3>Android</h3>
          <h4>Aprende a crear aplicaciones móviles nativas con notificaciones real time y publicarlas en el marketplace de Playstore</h4>
          <h5 class="course-price" >¥ 75.000</h5>
        </label>
      </div>
      <div class="col-xs-12 col-sm-6 col-md-3 nopad text-center">
        <label class="image-checkbox">
          <img class="img-responsive cursos-img" src="img/videojuegos.png" />
          <input class="select" type="checkbox"/>
          <h3>videojuegos</h3>
          <h4>Crea el videojuego que siempre soñaste, publícalo y vende. Curso Unity para del desarrollo de videojuegos en sus diferentes etapas y plataformas.</h4>
          <h5 class="course-price" >¥ 450.000</h5>
        </label>
      </div>
      <h3 class="count-text"></h3>
      <button class="btn btn-success">Comprar cursos</button>
    </section>
    <section class="block info">
      <div class="container">
        <div class="row">
          <div class="col-md-4">
            <h3>Contacto</h3>
            <address>
              <strong>Twitter, Inc.</strong><br>
              1355 Market Street, Suite 900<br>
              San Francisco, CA 94103<br>
              <abbr title="Phone">P:</abbr> (123) 456-7890
            </address>
          </div>
          <div class="col-md-8">
            <h3>Suscribete</h3>
            <form class="form-inline">
              <div class="form-group">
                <input type="email" class="form-control" id="exampleInputEmail2" placeholder="jane.doe@example.com">
              </div>
              <button type="submit" class="btn btn-default">Send invitation</button>
            </form>
          </div>
        </div>
      </div>
    </section>
  <footer>
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <p>Front End - JQUERY.</p>
        </div>
      </div>
    </div>
  </footer>
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <script src="js/script.js"></script>
<?php wp_footer();?>
</body>
</html>
