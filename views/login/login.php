<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<body>
  <form action="<?php echo constant('URL'); ?>/login/ingresar" method="post">
    <label for="idnombre">nombre</label>
    <input type="text" name="nombre" id="idnombre">
    <label for="idpass">contraseña</label>
    <input type="password" name="pass" id="idpass">

  </form>


</body>

</html>