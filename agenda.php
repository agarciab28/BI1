<!DOCTYPE html>
<html lang="en" dir="ltr">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link rel="stylesheet" href="css/bootstrap.min.css">
		<link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.min.css">
		<link rel="stylesheet" href="css/style.css">
		<link rel="stylesheet" href="css/style_formulario.css">
		<title></title>
	</head>
	<body>
		<?php
      require 'db/auth_p.php';
      require 'paginas/navbar_profesionista.php';
    ?>
		<div class="formCurso">
				<form class="curso" action="../BI1/db/Registrar_cita.php" method="Post" name="cita" id="cita">
					<div id="campo">
						<input type="text" name="Nombre" id="Nombre" placeholder="Nombre del cliente" required>
					</div>
					<label for="campo_hr">Hora:</label>
					<div id="campo_hr">
						<input type="time" name="hrInicio" id="hrInicio" required>
						-
						<input type="time" name="hrFin" id="hrFin" required>
					</div>
					<div id="campo">
						<input type="text" name="Fecha" id="Fecha" value="" onfocus="(this.type='date')" onblur="(this.type='text')" placeholder="Fecha" required>
					</div>
					<div id="boton">
						<input type="submit" class="input_curso"name="guardar" id="guardar" autofocus>
					</div>
				</form>
			</div>

			<?php require 'paginas/footer.php'; ?>
	</body>
	<!-- Scripts -->
  <script src="js/jquery-3.3.1.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
</html>
