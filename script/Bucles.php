<center><h1 aling="center">Taller Bucles</h1></center>




<html><!--mi comentario -->
    <head>
          <title>TALLER BUCLES</title>
          <link rel="icon" type="image/ico" href="icons/logo.png">
    </head>
    <body bgcolor="#FAF9F9">

     <br><br>
<form name="form1" action="Bucles.php" method="POST">
    <center>

      <table border="0" align="center" color="red">
         
          <tr>
            <td align="left"><font face="Times new Roman" size="3" color="#0E0000">Digite un numero para el punto 10
              <font face="Times new Roman" size="3" color="#FF0000">*
             </td>

            <td><input type="number" name="num1" border="1" placeholder="Numero " required></td>
            <td colspan="2" align ="center"><br> <center><input type ="submit" value="CALCULAR"></center> </td>
          </tr>
	   
    </table>

  </form>

    </body>
</html>


<?php
$n1=$_POST['num1'];
echo "<br><b>Punto 1</b>";
		echo "<br>Números: 1; 2; 3; 4; 5; 6; 7; 8; 9; 10"; //punto1
    
    
    echo "<br><br><b>Punto 2</b>";
		
		$i = 1;//punto2
		echo "<br>Números: ";
		while ($i<=10){
			echo "$i ".", ";
			$i++;
		}
		echo "<br><br><b>Punto 3</b><br>";
		$j=1;//punto3
		do{
			echo "$j".", ";
			$j++;
    }while($j<=100);
    

		echo "<br><br><b>Punto 4</b>";
		echo "<br>Números: ";//punto4
		for ($k=1; $k<=100; $k++){
			$k++;
			echo "$k".", ";
    }
    
    echo "<br><br><b>Punto 5</b>";
		
		$r= 1;//punto5
		echo "<br>Números: ";
		while($r<=10){
			$r++;
			$rr=rand(1,100);
			echo "$rr".", " ;
    }
    
    echo "<br><br><b>Punto 6</b>";
		
		echo "<br>Números: "; //punto6
		$suma=0;
		for ($i=1; $i<=100;$i++) { 
		$suma=$i+$suma; 
		}
    echo "$suma";
    
    echo "<br><br><b>Punto 7</b>";		
		echo "<br>Números: ";//punto7
		$l=1;
		do{
			echo "$l".", ";
			$l= $l+2;
    }while($l<=100);
    
    echo "<br><br><b>Punto 8</b>";
		
		$t= 1;//punto8
		$acumulador1=0;
		$acumulador2=0;
		//echo "<hr>";
		echo "<br>Números: ";
		echo "<table border = '1' cellpadding='4'><br>";
		while($t<=10){
			$tt=rand(1,100);
			echo $tt."&nbsp;&nbsp;".", ";
			if($tt%2==0){
				$acumulador1++;
				
			}else {
				$acumulador2++;
				
			}
			$t++;
		}
		echo "</table>";
		echo "<br><b>REPORTE FINAL</b>";
		echo "<table border=1>";
		echo "<tr><td>Total de pares:</td><td>". $acumulador1 ."</td></tr>";
		echo "<tr><td>Total de impares:</td><td>". $acumulador2 ."</td></tr>";
    echo "</table>";
    
    echo "<br><br><b>Punto 9</b>";
		
		$n= 1;//punto9
		$acumulador3=0;
		$acumulador4=0;
		$acumulador5=0;
		$acumulador6=0;
		//echo "<hr>";
		echo "<br>Números: ";
		echo "<table border = '1' cellpadding='4'><br>";
		while($n<=10){
			$nn=rand(-100,100);
			echo $nn."&nbsp;&nbsp;".",";
			if($nn%2==0){
				if($nn>=0){
				$acumulador3++;
				}else{
					$acumulador5++;
					}				
			}else {
				if($nn>=0){
				$acumulador4++;
				}else{
					$acumulador6++;
					}	
			}
			$n++;
		}
		echo "</table>";
		echo "<br><b>REPORTE FINAL2</b>";
		echo "<table border=1>";
		echo "<tr><td>Total de pares positivos:</td><td>". $acumulador3 ."</td></tr>";
		echo "<tr><td>Total de impares positivos:</td><td>". $acumulador4 ."</td></tr>";
		echo "<tr><td>Total de pares negativos:</td><td>". $acumulador5 ."</td></tr>";
		echo "<tr><td>Total de impares negativos:</td><td>". $acumulador6 ."</td></tr>";
    echo "</table>";




    echo "<br><br><b>Punto 10</b>";
    
if ($n1<1 ) {
  echo "Ingresar un numero positivo";
  }
else {
   echo "<h4>Tabla del $n1:</h4>";
   $i=1;
   echo "<tr>";
   while ($i<=10) {
     
     
         echo   "$n1 x $i = ".$n1*$i."<br/>";
         $i++;
         
         } 
         
         
   }


   echo "<br><br><b>OTROS PUNTOS</b><br>";


   
echo "<table border=1  >";
echo "Tabla ascendente";


$i=1;
while ($i <= $n1) {
  if ($i%2==0){

    echo "<td bgcolor='YELLOW'>". $i ."</td>";
  }else{
    echo "<td bgcolor='RED'>". $i ."</td>";
  }
  $i++;//$i=$i+1
}
echo"</table><br>";


echo "<table border=1  >";
echo "Tabla descendente";


$i=$n1;
while ($i >0 ) {
  if ($i%2==0){

    echo "<td bgcolor='YELLOW'>". $i ."</td>";
  }else{
    echo "<td bgcolor='RED'>". $i ."</td>";
  }
  $i--;//$i=$i+1
}


echo"</table><br>";

//TABLAS JUNTAS
echo "Tabla JUNTAS";

echo "<table  width=1% cellpadding=1 cellspacing=3 align=center  border=1>";
echo "<tr>";
echo "<td width=60% >";

echo "<table border=1>";


$i=1;
while ($i <= $n1) {
  
  if ($i%2==0){

    echo "<tr>";
    echo "<td bgcolor='YELLOW'>". $i ."     </td>";
    echo "</tr>";
    

    
  }else{
    

    echo "<td bgcolor='RED'>". $i ."</td>";
    

  }
 
  $i++;//$i=$i+1
  echo "</tr>";
  
  
};

echo"</table>";
echo"</td>";

echo "<td width=60% >";
echo "<table  border=1>";

$i=$n1;
while ($i >0 ) {
  echo "<tr>";
  
  if ($i%2==0){
    
    
    echo "<td bgcolor='YELLOW'>". $i ."     </td>";
    
  }else{
    echo "<td bgcolor='RED'>". $i ."</td>";
    
	}
	echo "</tr>"; 
  $i--;//$i=$i+1
   
}
echo"</table>";
echo"</td>";
echo"</tr>";
echo"</table>";

   ?>