<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" href="_css/estilo.css"/>
  <meta charset="UTF-8"/>
  <title>Curso de PHP - CursoemVideo.com</title>
</head>
<body>
<div>
    <pre>
      <?php
        $n=array(3,5,8,2); 
        print_r($n);
        $n[]=5; #adiciona um elemento ao vetor
        array_push($n,7); #coloca um elemento no final
        array_pop($n); #exclui o ultimo elemento do vetor
        print_r($n); #mostra o vetor na tela

        array_unshift($n, 7);#adc um elemento no inicio do  vetor
        array_shift($n); #exclui o primeiro vetor
        print_r($n);

        asort($n);#ordenada os elementos dentro do vetor/array 
        print_r($n);
      ?>
    </pre>
</div>
</body>
</html>
 