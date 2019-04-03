<center><h1 aling="center">Taller Bucles</h1></center>




<html><!--mi comentario -->
    <head>
          <title>TALLER BUCLES</title>
          <link rel="icon" type="image/ico" href="icons/logo.png">
    </head>
    <body bgcolor="#FAF9F9">

     <br><br>
<form name="form1" action="Bucles - copia.php" method="POST">
    <center>

      <table border="0" align="center" color="red">
         
          <tr>
            <td align="left"><font face="Times new Roman" size="3" color="#0E0000">Digite un numero 
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
  $i--;//$i=$i+1
  echo "</tr>";  
}
echo"</table>";
echo"</td>";
echo"</tr>";
echo"</table>";

   ?>