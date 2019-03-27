<?php


$n1=$_POST['num1'];
$n2=$_POST['num2'];
$op=$_POST['operar'];

//echo "Primer numero: ".$n1;
//echo "<br>Segundo numero: ".$n2;
//echo "<br>OPERACION: ".$op;
switch ($op) {
  case 's':
    echo "La suma es: ".($n1+$n2);
    break;
    case 's':
      echo "La resta es: ".($n1-$n2);
      break;
    case 'm':
        echo "La multiplicacion es: ".($n1*$n2);
        break;
    case 'd':
        echo "La division es: ".($n1/$n2);
            break;

            case 'p':
            echo "La potenciacion  para el numero 1 es: ".($n1*$n1);
            echo "<br>La potenciacion para el numero 2 es: ".($n2*$n2);
                break;
        case 'rc':
          echo "La potenciacion para el numero 1 es: ". sqrt($n1);
          echo "<br>La potenciacion para el numero 2 es: ". sqrt($n2);
              break;


  default:
    # code...
    break;
}







?>
