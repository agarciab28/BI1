<div id="accordion" class="accordion">


  <?php
    require('db/database.php');
    $sql = "SELECT * FROM entrada_curso WHERE curso='$curso'";
    $resultset = mysqli_query($con, $sql) or die("database error:". mysqli_error($con));
    if(mysqli_num_rows($resultset) > 0){
      while( $record = mysqli_fetch_assoc($resultset) ) {
    ?>

    <div class="card">
    <div class="card-header" style="background-color:#143952;">
      <h5 class="mb-0">
        <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="<?php echo '#entrada' . $record['id_entrada'] ?>" aria-expanded="false" aria-controls="<?php echo 'entrada' . $record['id_entrada'] ?>">
          <?php echo $record['titulo'] ?>
        </button>
      </h5>
    </div>
    <div id="<?php echo 'entrada' . $record['id_entrada'] ?>" class="collapse" aria-labelledby="headingOne" data-parent="#accordion">
      <div class="card-body" style="display: flex; align-items: center;">
        <video src="<?php echo '../BI1/uploads/videos/' . $record['video'] ?>" controls ></video> <br>
        <div class="jumbotron" id="jumbo_reg" style="background-color:#6E828A; margin-left:1em;">
          <h1 class="display-4">Descripción</h1>
          <p class="lead"><?php echo $record['descripcion'] ?></p>
      </div>
    </div>
    </div>
    </div>

    <?php }
            }
          else {
            require 'paginas/sinentradas.php';
          }
    ?>

</div>
