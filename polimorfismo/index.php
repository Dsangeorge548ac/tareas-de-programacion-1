<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejemplo de Polimorfismo</title>
</head>
<style>
    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
    }

    body {
        font-family: sans-serif;
    }

    h1 {
        font-weight: 100;
        font-family: Verdana, Geneva, Tahoma, sans-serif;
    }

    .contenedor {
        width: 30em;
        text-align: center;
        margin: 40px auto;
        padding: 30px;
        border-radius: 10px;
        background-color: gray;
        color: white;
    }

    input {
        height: 40px;
        background-color: white;
        color: black;
        width: 15em;
        border-color: transparent;
        border-radius: 5px;
        margin: 20px;
    }
</style>
<body>

<div class="contenedor">
    <h1>Polimorfismo con Animales</h1>
    <br><br>

    <?php
    require 'codigo.php';

    $perro = new Perro();
    $gato = new Gato();

    if(isset($_POST['realizarPolimorfismo'])) {
        echo "El perro hace: " . hacerRuido($perro). "<br>","<br>";
        echo "El gato hace: " . hacerRuido($gato). "<br>";
    }
    ?>

    <form method="post">
        <input type="submit" name="realizarPolimorfismo" value="Realizar Polimorfismo">
    </form>

</div>

</body>
</html>
