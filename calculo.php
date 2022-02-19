<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <?php
    if(isset($_POST['btn']) && $_POST['btn'] == 'Calcular'){
      $lados = $_POST['lado'];
      $ap = null;
      $area = null;
      
      if(isset($_POST['lado']) && !empty($_POST['lado'])){
        if(is_numeric($_POST['lado'])){

          $ap = ($lados/(2*tan(deg2rad(22.5))));
          $area = 4 * $lados * $ap;

          echo "<h2 align='center'>Datos de el Octagono Regular</h2>";
          echo "<h2 align='center'>Lados: " . $lados ."</h2>";
          echo "<h2 align='center'>Apotema: " . $ap ."</h2>";
          echo "<h2 align='center'>Area: " . $area . " U²</h2>";
        }
      }
    }
  ?>
  <a href="index.php">Volver</a>
</body>
</html>