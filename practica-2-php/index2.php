<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
  require 'codigo.php';

  $resolver = new operaciones;
     echo $resolver->calculardolar(75);
     echo "<h1></h1>";
     echo $resolver->sumar(75);
?>
</body>
</html>