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
      <table border="1"><tr>
        <?php
            $n = array(3,5,8,2);
            $n[] = 7;
            print_r($n);

            $c = range(5,20,2);
            foreach($c as $valor){
              echo "<td>$valor</td> ";
            }

          $v=array(1=>"A",3=>"B",6=>"C", 8=>"D");
          $v[]="E";
          unset($v[8]);
          print_r($v);
          
          $cad=array("nome"=>"Anna",
          "idade"=>23,
          "peso"=>78.5);
          /*$cad["fuma"]=true;*/

          foreach($cad as $campo => $valor){
            echo "O valor de $campo é $valor. <br/>";
          }
        ?>
      </table>
    </pre>
</div>
</body>
</html>
 