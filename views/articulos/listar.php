<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">

  <title>Listado</title>
</head>

<body>

  <?php require 'views/header.php';?>

  <input type="hidden" value="<?php echo constant('URL'); ?>" id="url">


  <h1>Listado articulos</h1>


  <?php require 'views/footer.php';?>


  <!-- importo el javascript-->
  <script src="<?php echo constant('URL'); ?>public/js/main.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous">
  </script>
</body>

</html>