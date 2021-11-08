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
       $a = isset($_GET["ano"])?$_GET["ano"]:1900;
       $i = date("Y") - $a;
       echo "Você nasceu em ". $a . " e terá $i anos.";
       if( $i >= 18) {
         $v = "Já pode voltar";
         $d = "Já pode dirigir";
       }
       else {
         $v = "Não pode voltar";
         $d = "Não pode dirigir";
       }
       echo " Com essa idade você $v e $d";
    ?>
    <a href="_modelohtml.html">Voltar</a>
</div>
</body>
</html>
 