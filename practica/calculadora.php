<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $tasa_cambio = floatval($_POST["tasa_cambio"]);
    $cantidad_bolivares = floatval($_POST["cantidad_bolivares"]);
    
    $cantidad_dolares = $cantidad_bolivares / $tasa_cambio;
}

if (isset($cantidad_dolares)) {
    print '<script>document.getElementsByName("cantidad_dolares")[0].value = "' . $cantidad_dolares . '$";</script>';
}

print "<html lang='en'>
<head>
    <meta charset='UTF-8'>
    <meta name='viewport' content='width=device-width, initial-scale=1.0'>
    <title>Calculadora de Dólares a Bolívares</title>
</head>

<style>

body {
    background-color: rgb(35, 35, 35);
}

h1 {
    font-family: sans-serif;
    font-weight: 100;
    color: white;
}

p {
    font-size: 12px;
    font-family: sans-serif;
    color: rgb(153, 153, 153);
}

.input-division {
    display: flex;
    position: relative;
    flex-direction: column;
    width: 25%;
    gap: 20px;
    margin: auto;
    height: 100%;
    margin-top: 0;
}

input {
    height: 50px;
    width: 350px;
    border-radius: 5px;
    border: solid 1px rgb(83, 82, 82);
    font-size: 18px;
    color: rgb(189, 189, 189);
    padding: 0px 10px;
    background-color: transparent;
}

input::placeholder {
    opacity: 1;
    color: rgb(189, 189, 189);
    text-align: start;
}

input:hover {
    border: solid 1px rgba(63, 189, 247, 0.679);
}

form {
    display: flex;
    width: 100%;
    flex-direction: column;
    gap: 10px;
}

button {
    height: 50px;
    width: 350px;
    border: solid 1px;
    border-radius: 5px;
    background: transparent;
    color: rgb(189, 189, 189);
}
</style>

<body>
<div class='input-division'>
    <div>
        <h1>Calculadora de Dólares a Bolívares</h1>
        <p>9 oct, 22:12 UTC · Renuncia de responsabilidad</p>
    </div>
    <form method='POST' action='index.html'>
        <input type='number' name='tasa_cambio' placeholder='Tasa de cambio' step='0.01' required";
        if(isset($_POST['tasa_cambio'])) print ' value="' . $_POST['tasa_cambio'] . '"';
        print ">
        
        <input type='number' name='cantidad_bolivares' placeholder='Bs' step='0.01' required";
        if(isset($_POST['cantidad_bolivares'])) print ' value="' . $_POST['cantidad_bolivares'] . '"';
        print ">

        <input type='text' name='cantidad_dolares' placeholder='$' readonly";
        if(isset($cantidad_dolares)) print ' value="' . $cantidad_dolares . '$"';
        print ">

        <button type='submit' name='calcular'>Calcular</button>
    </form>
</div>
</body>
</html>";


?>
