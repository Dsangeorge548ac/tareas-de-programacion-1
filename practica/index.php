<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Calculadora de Dólares a Bolívares</title>
</head>
<body>
<div class="input-division">
    <div>
        <h1>Calculadora de Dólares a Bolívares</h1>
        <p>9 oct, 22:12 UTC · Renuncia de responsabilidad</p>
    </div>
    <form method="POST" action="calculadora.php" >
        <input name="tasa_cambio" placeholder="Tasa de cambio" step="0.01" required
            <?php if(isset($_POST['tasa_cambio'])) echo 'value="' . $_POST['tasa_cambio'] . '"'; ?>>
        
        <input name="cantidad_bolivares" placeholder="Bs" step="0.01" required
            <?php if(isset($_POST['cantidad_bolivares'])) echo 'value="' . $_POST['cantidad_bolivares'] . '"'; ?>>

        <input type="text" name="cantidad_dolares" placeholder="$" readonly
            <?php if(isset($cantidad_dolares)) echo 'value="' . $cantidad_dolares . '"'; ?>>

        <button type="submit" name="calcular">Calcular</button>
    </form>
</div>



</body>
</html>
