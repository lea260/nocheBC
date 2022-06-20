<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">

  <title>Document</title>
</head>

<body>

  <?php require 'views/header.php';?>

  <input type="hidden" value="<?php echo constant('URL'); ?>" id="url">


  <h1>pagina default</h1>
  <h2><?=$this->mensaje;?></h2>

  <?php require 'views/footer.php';?>


  <!-- importo el javascript-->
  <script src="<?php echo constant('URL'); ?>public/js/main.js"></script>

</body>

</html>