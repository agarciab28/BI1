<?php

//include("db/auth.php");
session_start();
$con = mysqli_connect("localhost","rootis","123456", "proyis");
    // If form submitted, insert values into the database.
    if (isset($_REQUEST['titulo'])){
		$titulo = $_REQUEST['titulo'];
		$titulo = mysqli_real_escape_string($con,$titulo);
		$descripcion = $_REQUEST['descripcion'];
    $usuario = $_SESSION['username'];

        $query = "INSERT INTO cursos VALUES (1 , '$titulo', '$descripcion', '$usuario', 1)";
        $result = mysqli_query($con,$query);
        if($result){
            header("Location: index.php");
        }
				else{
          echo "error";
          echo $usuario;
          echo mysqli_error($con);
					echo "<script type='text/javascript'>alert('No fue posible el registro, es posible que el curso ya este registrada intente nuevamente');";
				}
    }else{
?>
<!-- Cover -->

									<h1>Registro Curso</h1>
									<form name="registration" action="" method="post"> <br>
    									<input type="text" name="titulo" placeholder="Titulo" required /> <br>
    									<input type="text" name="descripcion" placeholder="Descripcion" required /> <br> <br>
                      <input type="submit" name="submit" value="Registrar" /> <br>
									</form>
<?php } ?>
