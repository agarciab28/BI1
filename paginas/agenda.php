<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.min.css">
  <link rel="stylesheet" href="css/style.css">
  <title>Agenda</title>
</head>
<body>
	<div id="Formulario_Cita">
		<form action="..\db\Registrar_cita.php" method="Post" name="cita" id="cita">
			<div id="campo">
				<label for="Nombre">Nombre de Cliente:</label>
				<input type="text" name="Nombre" id="Nombre" required>
			</div>
			<label for="campo_hr">Hora:</label>
			<div id="campo_hr">
				<input type="time" name="hrInicio" id="hrInicio" required>
				-
				<input type="time" name="hrFin" id="hrFin" required>
			</div>
			<div id="campo">
				<label for="Fecha">Fecha de la cita:</label>
				<input type="date" name="Fecha" name="Fecha" required>
			</div>
			<div id="boton">
				<input type="submit" name="guardar" id="guardar" autofocus>
			</div>
		</form>
		
	</div>
</body>
</html>