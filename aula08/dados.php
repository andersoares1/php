<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dados em PHP</title>
    <style>
        body {
            font-size: <?php echo $valor; ?>;
        }
    </style>
</head>
<body>
    <?php
        $valor = isset($_POST["v"]) ? $_POST["v"] : "[não informado]";
        echo "Digitou ".$valor;
    ?>
        <a href="index.html">Voltar</a>
</body>
</html>