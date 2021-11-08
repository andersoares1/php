<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" href="_css/estilo.css"/>
  <meta charset="UTF-8"/>
  <title>Curso de PHP - CursoemVideo.com</title>
</head>
<body>
<div>
    <?php
        $nome = "Anderson Soares";
        echo "Seu nome é ". strtolower($nome);
    ?>
    <?php
      $site = "Curso em Video";
      $sub = substr($site,0,5);
      echo "$sub ";
    ?>
    <?php
      $frase="Gosto de estudar Matematica";
      $novafrase=str_ireplace("Matematica", "PHP", $frase);
      echo "$novafrase";
    ?>
</div>
</body>
</html>
 