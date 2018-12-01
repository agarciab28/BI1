
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php
    $profesionista = $_GET["profesor"];
     ?>

     <?php include '../db/database.php';
     $sql=mysqli_query($con,"SELECT * FROM info_profesionista WHERE usuario = '$profesionista'");
     while( $row = mysqli_fetch_assoc($sql) ) { ?>
    <main class="col">
      <div class="jumbotron" id="jumbo_prof">
          <h1 class="display-4">Curriculum</h1>
          <p class="lead">
            <?php echo $row['curriculum']; ?>
          </p>
      </div>
    </main>

    <?php } ?>
  </body>
</html>
