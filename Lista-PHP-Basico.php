<?php
  echo "<h1>Lista PHP Basico</h1>"."<br>";

  echo "------------------- 01 -------------------"."<br>";
  //Exercicio 01
  $number = rand(-1000, 1000);
	echo $number."<br>";	
 
  if ($number > 100){
    echo "eh maior que 100"."<br>";
  } else {
    echo "eh menor que 100"."<br>";
  }
  echo "-------------------------------------------"."<br>";

  echo "------------------- 02 -------------------"."<br>";
  //Exercicio 02
  $number1 = rand(-100, 100);
  echo $number1."<br>";
  
  if ($number1 == 0) {
    echo "eh zero"."<br>";
  } else if ($number1 > 0) {
    echo "eh positivo"."<br>";
  } else {
    echo "eh negativo"."<br>";																  
  }
  echo "-------------------------------------------"."<br>";

  echo "------------------- 03 -------------------"."<br>";
  //Exercicio 03
  $A = rand(-100, 100);
  echo "A = $A"."<br>";
  $B = rand(-100, 100);
  echo "B = $B"."<br>";
  $C = rand(-100, 100);
  echo "C = $C"."<br>";
  $D = rand(-100, 100);
  echo "D = $D"."<br>";

  $Soma = $A + $D;
  $Div = $B / $C;

  echo "Soma = $Soma"."<br>";
  echo "Divisao = $Div"."<br>";
  echo "-------------------------------------------"."<br>";

  echo "------------------- 04 -------------------"."<br>";
  //Exercicio 04
  $A = rand(-100, 100);
  echo "A = "; echo $A."<br>";
  $B = rand(-100, 100);
  echo "B = "; echo $B."<br>";
  echo "$A $B"."<br>";
  echo "-------------------------------------------"."<br>";

  echo "------------------- 05 -------------------"."<br>";
  //Exercicio 05
  $nota1 = rand(0, 10);
  $nota2 = rand(0, 10);
  $nota3 = rand(0, 10);
  $nota4 = rand(0, 10);

  $media = (($nota1 + $nota2 + $nota3 + $nota4)/4);

  echo "Media = $media"."<br>";

  if ( $media >= 7.00 ){
    echo "Aprovado"."<br>";
  } else if ( $media < 7.00 && $media >= 5.00 ){
    echo "Em Exame"."<br>";
  }else{
    echo "Reprovado"."<br>";
  }
  echo "-------------------------------------------"."<br>";
  
  echo "------------------- 06 -------------------"."<br>";
  //Exercicio 06
  
  $gasolina = floatval('4.'.rand(0, 9));
  $alcool = floatval('3.'.rand(0, 9));
  echo "Gasolina = $gasolina"."<br>";
  echo "Alcool = $alcool"."<br>";

  $calc = $gasolina * 0.7;
  echo "Calc = $calc"."<br>";


  if ( $calc > $alcool ){
    echo "abasteca com alcool"."<br>";
  }else{
    echo "abasteca com gasolina"."<br>";
  }
  echo "-------------------------------------------"."<br>";
?>
