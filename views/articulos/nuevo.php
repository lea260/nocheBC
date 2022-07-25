<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
  <title>Document</title>
</head>

<body>
  <input type="hidden" value="<?php echo constant('URL'); ?>" id="url">
  <?php require 'views/header.php';?>

  <div class="container">
    <div class="row">
      <div class="col-sm">
        <h1>Crear Articulo</h1>
      </div>
    </div>
    <form id="form01" class="row" action="<?php echo constant('URL'); ?>articulos/crear" method="post"
      enctype="multipart/form-data">
      <div class="col-lg-12 col-md-12 col-sm-12">
        <label for="articuloId" class="form-label">Id</label>
        <input type="text" class="form-control" id="articuloId" aria-describedby="emailHelp" name="id" disabled
          value="25">
      </div>
      <div class="col-lg-12 col-md-12 col-sm-12">
        <label for="articuloCodigo" class="form-label">Codigo</label>
        <input type="text" class="form-control" id="articuloCodigo" name="codigo" value="codigo25">
      </div>
      <div class="col-lg-12 col-md-12 col-sm-12">
        <label for="articuloDescripcion" class="form-label">Descripcion</label>
        <input type="text" class="form-control" id="articuloDescripcion" aria-describedby="emailHelp" name="descripcion"
          value="Es muy bueeeno">
      </div>
      <div class="col-lg-12 col-md-12 col-sm-12">
        <label for="articuloPrecio" class="form-label">Precio</label>
        <input type="text" class="form-control" id="articuloPrecio" aria-describedby="emailHelp" name="precio"
          value="36.5">
      </div>
      <div class="col-lg-12 col-md-12 col-sm-12">
        <label for="articuloFecha" class="form-label">Fecha</label>
        <input type="date" class="form-control" id="articuloFecha" aria-describedby="emailHelp" name="fecha"
          value="2022-05-30">
      </div>
      <div class="col-lg-12 col-md-12 col-sm-12">
        <label for="articuloFecha" class="form-label">Fecha</label>
        <input type="file" class="form-control" id="articuloFecha" aria-describedby="emailHelp" name="img">
      </div>

      <div class="col-lg-12 col-md-12 col-sm-12" id="imgP">

      </div>

      <div class="col-lg-6 col-md-6 col-sm-6 py-2">
        <button id="btnEnviarForm" type="submit" class="btn btn-success">Enviar</button>
      </div>



      <input type="hidden" value="<?php echo $this->articulo->id; ?>" id="articuloId" name="articuloId">

    </form>
  </div>




  <?php require 'views/footer.php';?>

  <script src="<?php echo constant('URL'); ?>/public/js/jquery-3.6.0.min.js"></script>
  <!-- importo el javascript-->
  <script src="<?php echo constant('URL'); ?>/public/js/articulos/verArticulo.js"></script>
  <!--<script src="<?php echo constant('URL'); ?>/public/js/main.js"></script> -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous">
  </script>

</body>

</html>