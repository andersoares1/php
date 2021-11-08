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
        $prod = "leite";
        $preco = 4.5;
        printf("O %s está custando R$ %.2f", $prod, $preco);
    ?>
    </br>
    <?php
      $x[0]=4;
      $x[1]=8;
      $x[2]=7;
      print_r($x);
      $v2= array (3,7,6,8,9);
      print_r($v2);
    ?>
    <?php /*
      $txt = "Este é um exempli de uma string gigante e vai mostrar o funcionamento da função wordwrap."
      $r = wordwrap($txt, 20, "<br>/n, false");
      echo ($r);*/
   ?>

   <?php
    /*$txt = "Anderson Soares";
    $tamanho = strien($txt);*/
   ?>
  <?php/*
    $nome = "   Anderson Soares  ";
    echo(strien($nome));
    $novo = trim($nome);
    echo($novo);
    echo(strien($novo));*/
  ?>
  <php 
    $frase ="Meu nome é Pasquali";
    $cont = str_word_count($frase, 0);
    print_r($cont);
  ?>
</div>
</body>
</html>
 