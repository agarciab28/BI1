<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/style_buscador.css">
    <title></title>
  </head>
  <body>
    <?php
    session_start();
    if(isset($_SESSION["usuario"])){
      require 'paginas/navbar_inicio.php';
    }
    else if (isset($_SESSION["profesionista"])) {
      require 'paginas/navbar_profesionista.php';
    }

    else {
      require 'paginas/navbar.php';
    }

     ?>
    <div class="container">

    <hgroup class="mb20" style="margin-top: 2em;">
  		<h1 style="color:#143952;">Resultados de la busqueda</h1>
  	</hgroup>
    <section class="col-xs-12 col-sm-6 col-md-12">

      <?php
            require('db/buscador.php');
            while( $row = mysqli_fetch_assoc($sql) ) {
          ?>
          <article class="search-result row">
      			<div class="col-xs-12 col-sm-12 col-md-3">
      				<a href="#" class="thumbnail"><img class="thumbnail" src="https://via.placeholder.com/1920x1080.png/064242/fff" alt="<?php echo $row["titulo"]; ?>" /></a>
      			</div>
      			<div class="col-xs-12 col-sm-12 col-md-2">
      				<ul class="meta-search">
                <li><i class="fa fa-user" aria-hidden="true"></i></i> <span><?php echo $row["profesionista"]; ?></span></li>
      					<li><i class="fa fa-tag" aria-hidden="true"></i></i> <span><?php echo $row["categoria"]; ?></span></li>
      				</ul>
      			</div>
      			<div class="col-xs-12 col-sm-12 col-md-7 excerpet">
      				<h3><a href="#"><?php echo $row["titulo"]; ?></a></h3>
      				<p><?php echo $row["descripcion"]; ?></p>
                      <span class="plus"><a href="#" style="color:white;">Ver más</i></a></span>
      			</div>
      			<span class="clearfix border"></span>
      		</article>

        <?php } ?>
    </section>
    <!-- <hgroup class="mb20" style="margin-top: 2em;">
		<h1 style="color:#143952;">Resultados</h1>
		<h2 class="lead" style="color:#143952;">Se encontraron 3 resultados</strong></h2>
	</hgroup>

    <section class="col-xs-12 col-sm-6 col-md-12">
		<article class="search-result row">
			<div class="col-xs-12 col-sm-12 col-md-3">
				<a href="#" class="thumbnail"><img class="thumbnail" src="https://via.placeholder.com/1920x1080.png/064242/fff" alt="Lorem ipsum" /></a>
			</div>
			<div class="col-xs-12 col-sm-12 col-md-2">
				<ul class="meta-search">
          <li><i class="fa fa-user" aria-hidden="true"></i></i> <span>Profesor</span></li>
					<li><i class="fa fa-calendar" aria-hidden="true"></i></i> <span>Fecha</span></li>
					<li><i class="fa fa-tag" aria-hidden="true"></i></i> <span>Categoría</span></li>
				</ul>
			</div>
			<div class="col-xs-12 col-sm-12 col-md-7 excerpet">
				<h3><a href="#">Título del Curso</a></h3>
				<p>Contenido de la Descripcion del curso</p>
                <span class="plus"><a href="#" style="color:white;">Ver más</i></a></span>
			</div>
			<span class="clearfix border"></span>
		</article>

        <article class="search-result row">
			<div class="col-xs-12 col-sm-12 col-md-3">
				<a href="#" class="thumbnail"><img class="thumbnail" src="https://via.placeholder.com/1920x1080.png/064242/fff" alt="Titulo del curso" /></a>
			</div>
			<div class="col-xs-12 col-sm-12 col-md-2">
				<ul class="meta-search">
          <li><i class="fa fa-user" aria-hidden="true"></i></i> <span>Profesor</span></li>
					<li><i class="fa fa-calendar" aria-hidden="true"></i></i> <span>Fecha</span></li>
					<li><i class="fa fa-tag" aria-hidden="true"></i></i> <span>Categoría</span></li>
				</ul>
			</div>
			<div class="col-xs-12 col-sm-12 col-md-7">
				<h3><a href="#">Título del Curso</a></h3>
				<p>Contenido de la Descripcion del curso</p>
                <span class="plus"><a href="#" style="color:white;">Ver más</i></a></span>
			</div>
			<span class="clearfix border"></span>
		</article>

		<article class="search-result row">
			<div class="col-xs-12 col-sm-12 col-md-3">
				<a href="#" class="thumbnail"><img class="thumbnail" src="https://via.placeholder.com/1920x1080.png/064242/fff" alt="Titulo del Curso" /></a>
			</div>
			<div class="col-xs-12 col-sm-12 col-md-2">
				<ul class="meta-search">
          <li><i class="fa fa-user" aria-hidden="true"></i></i> <span>Profesor</span></li>
					<li><i class="fa fa-calendar" aria-hidden="true"></i></i> <span>Fecha</span></li>
					<li><i class="fa fa-tag" aria-hidden="true"></i></i> <span>Categoría</span></li>
				</ul>
			</div>
			<div class="col-xs-12 col-sm-12 col-md-7">
				<h3><a href="#">Título del Curso</a></h3>
				<p>Contenido de la Descripcion del curso</p>
                <span class="plus"><a href="#" style="color:white;">Ver más</i></a></span>
			</div>
			<span class="clearfix border"></span>
		</article>

    <article class="search-result row">
      <div class="col-xs-12 col-sm-12 col-md-3">
        <a href="#" class="thumbnail"><img class="thumbnail" src="https://via.placeholder.com/1920x1080.png/064242/fff" alt="Titulo del Curso" /></a>
      </div>
      <div class="col-xs-12 col-sm-12 col-md-2">
        <ul class="meta-search">
          <li><i class="fa fa-user" aria-hidden="true"></i></i> <span>Profesor</span></li>
          <li><i class="fa fa-calendar" aria-hidden="true"></i></i> <span>Fecha</span></li>
          <li><i class="fa fa-tag" aria-hidden="true"></i></i> <span>Categoría</span></li>
        </ul>
      </div>
      <div class="col-xs-12 col-sm-12 col-md-7">
        <h3><a href="#">Título del Curso</a></h3>
        <p>Contenido de la Descripcion del curso</p>
                <span class="plus"><a href="#" style="color:white;">Ver más</i></a></span>
      </div>
      <span class="clearfix border"></span>
    </article>

	</section> -->
</div>
  <?php
    include 'paginas/footer.php';
  ?>
  </body>
  <!-- Scripts -->
  <script src="js/jquery-3.3.1.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
</html>
