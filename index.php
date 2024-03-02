<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Servidor teste</title>
</head>
<body>

    <h1>Servidor teste :)</h1>

    <?php

    require 'vendor/autoload.php';

    use App\Carro;

    $carro = new Carro("Marca", "Modelo", "Ano");

    $carro->exibirInformacoes();


    ?>
    
</body>
</html>