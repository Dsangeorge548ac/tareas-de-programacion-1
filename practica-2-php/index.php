<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora</title>
</head>
<body>
    <form method="post">
        <label for="dolar">Ingrese la Taza:</label>
        <br>
        <input type="text" name="taza" id="taza" required>
        <br>
        <br>

        <label for="dolar">Ingrese la cantidad en dólares:</label>
        <br>

        <input type="text" name="dolar" id="dolar" required>
        <br>
        <br>
        
        <input type="submit" value="Calcular">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        require 'codigo.php';

        $resolver = new operaciones;

        // Obtener valores de los campos de entrada
        $cantidadtaza = $_POST["taza"];
        $cantidadDolar = $_POST["dolar"];
        


        echo "Resultado en Dólares: " . $resolver->multiplicar ($cantidadtaza, $cantidadDolar);
        echo "<br>";

        echo "Resultado de la Suma: " . $resolver->sumar($cantidadtaza);
        echo "<br>";

        echo "Resultado de la resta: " . $resolver->restar($cantidadtaza);
    }
    ?>
</body>
</html>



