<?php
  $javascriptSection = '';
  $cssSection = '';
  $query = 'SELECT * 
    FROM configuracion c
    INNER JOIN tipoconfiguracion tc ON c.id_tipo_configuracion = tc.id_tipo_configuracion
    WHERE LOWER(tc.nombre_tipo_configuracion) IN ("css","icon","javascript") AND c.active = 1
    ORDER BY c.id_configuracion desc';
    $result = $mysqli->query($query);
?>

<!DOCTYPE html>
<html lang="es">
  <head>
    <title><?php echo $title ?></title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, height=device-height, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <?php
      while ($row = $result->fetch_assoc()) {
        if(strtolower($row["nombre_tipo_configuracion"]) == 'css') {
            echo "<link rel='stylesheet' type='text/css' href='".$row["valor_configuracion"]."'>";
        } elseif(strtolower($row["nombre_tipo_configuracion"]) == 'icon') {
          echo "<link rel='icon' href='".$row["valor_configuracion"]."'>";
        }
      }
    ?>
  </head>
  <body>
    <!-- Loader -->
    <?php include('loader.php');?>
    <div class="page">
      <!--Header-->
      <?php include('header.php');?>
      <!-- BodyReplace -->
      <?php include(getRootPathFile($page_content));?>
      <?php include('footer.php');?>
    </div>
    <?php
      $result->data_seek(0);
      while ($row = $result->fetch_assoc()) {
        if(strtolower($row["nombre_tipo_configuracion"]) == 'javascript') {
            echo "<script src='".$row["valor_configuracion"]."'></script>";
        }
      }
      if (!empty($javascriptSection)) {
        echo $javascriptSection;
      }
      
      if (!empty($cssSection)) {
        echo $cssSection;
      }
    ?>
  </body>
</html>