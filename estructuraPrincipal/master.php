<!DOCTYPE html>
<html lang="en">
  <head>
    <title><?php echo $title ?></title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, height=device-height, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="icon" href="./images/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Raleway:100,200,300,400,500,600,700,800,900">
    <link rel="stylesheet" href="./css/style.css">
  </head>
  <body>
    <!-- Loader -->
    <?php include('loader.php');?>
    <div class="page">
      <!--Header-->
      <?php include('header.php');?>
      <!-- BodyReplace -->
      <?php include($page_content);?>
    </div>
    <script src="./js/core.min.js"></script>
    <script src="./js/script.js"></script>
  </body>
</html>