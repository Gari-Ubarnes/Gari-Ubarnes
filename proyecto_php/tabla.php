<?php

if (isset($_REQUEST['numero'])) {

    

    if (!empty($_REQUEST['numero']) || !empty($_REQUEST['select'])) {

        $numero=$_REQUEST['numero'];
        $seleccion=$_REQUEST['select'];

    }else{

        $numero='dato vacio';
        $seleccion='dato vacio';

    }

}

?>

<!DOCTYPE html>

<html lang="en">

<head>

    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="css.css">

    <title>tabla</title>

</head>

<body background="math.png">

 <center>
<?php
switch($seleccion){
    case 1:
      $operacion='Multiplicar' ;
    echo  "<h1 class='tituloh1'>Tabla De $operacion Del: $numero </h1>";
    for ($i=1; $i <=10 ; $i++) { 
    echo  "<h1 class='h1'> ".$numero." "."X"." ".$i."=".$numero*$i."</h1>";
    }
    break;
    
    case 2:
    $operacion='Division' ;
    echo  "<h1 class='tituloh1'>Tabla De $operacion Del: $numero </h1>";
    for ($i=1; $i <=10 ; $i++) { 
        //if (($i-1)%4==0) echo "</tr><tr>";
if($numero % 2==1 ){
echo "<h1 class='h1'> ".($i*$numero)." "."/"." ".($numero*$i)/$i."=".$i."</h1>";
    }else{
        echo "<h1 class='h1'> ".($numero*$i)." "."/"." ".$i."=".($numero*$i)/$i."</h1>";
    }
 }
    break;
    
  case 3:
  $operacion='Resta' ;
echo  "<h1 class='tituloh1'>Tabla De $operacion Del: $numero </h1>";
for ($i=$numero; $i <=(13+($numero-3)) ; $i++) { 
    echo  "<h1 class='h1'> ".$numero." "."-"." ".$i."=".$i-$numero."</h1>";
    }
  break;

 case 4:
 $operacion='Suma' ;
echo  "<h1 class='tituloh1'>Tabla De $operacion Del: $numero </h1>";
for ($i=1; $i <=10 ; $i++) { 
    echo  "<h1 class='h1'> ".$numero." "."+"." ".$i."=".$numero+$i."</h1>";
    }
 break;
}
    ?>
     <br>
    <form  action='vista.php' method="post">
      <br>
      <input type="submit" value="INICIO">
    </form>

 </center>

</body>

</html>