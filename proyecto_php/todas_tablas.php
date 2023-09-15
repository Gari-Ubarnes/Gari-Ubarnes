<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css.css">
    <title>Multiplicar</title>
</head>
<body>
    
    <form  action='vista.php' method="post">
    <input  class="inputt" type="submit" value="Regresar Inicio">
    </form>

    <?php
     if(isset($_POST['todast'])){
        $envio=$_POST['todast'];
        
        echo '<div class="todast">';
        for ($i=1; $i <=10 ; $i++) { 
        
        echo'<tr>';
       echo  "<td class='h1'> 1 X $i=",1*$i,"</td><br>";
        echo '</tr>';
        
    }
    
   echo '</div>' ;
    echo '<div class="todast">';
    for ($i=1; $i <=10 ; $i++) { 
    
        echo'<tr>';
       echo  "<td class='h1'> 2 X $i=",2*$i,"</td><br>";
        echo '</tr>';
    }
    echo '</div>';
    
     echo '<div class="todast">';
    for ($i=1; $i <=10 ; $i++) { 
    
        echo'<tr>';
       echo  "<td class='h1'> 3 X $i=",3*$i,"</td><br>";
        echo '</tr>';
    }
    echo '</div>';
    
     echo '<div class="todast">';
     for ($i=1; $i <=10 ; $i++) { 
     
         echo'<tr>';
        echo  "<td class='h1'> 4 X $i=",4*$i,"</td><br>";
         echo '</tr>';
     }
     echo '</div>';
    
    
     echo '<div class="todast">';
     for ($i=1; $i <=10 ; $i++) { 
     
         echo'<tr>';
        echo  "<td class='h1'> 5 X $i=",5*$i,"</td><br>";
         echo '</tr>';
     }
     echo '</div>';
    
    
     echo '<div class="todast">';
     for ($i=1; $i <=10 ; $i++) { 
     
         echo'<tr>';
        echo  "<td class='h1'> 6 X $i=",6*$i,"</td><br>";
         echo '</tr>';
     }
     echo '</div>';
    
    
     echo '<div class="todast">';
     for ($i=1; $i <=10 ; $i++) { 
     
         echo'<tr>';
        echo  "<td class='h1'> 7 X $i=",7*$i,"</td><br>";
         echo '</tr>';
     }
     echo '</div>';
    
    
     echo '<div class="todast">';
     for ($i=1; $i <=10 ; $i++) { 
     
         echo'<tr>';
        echo  "<td class='h1'> 8 X $i=",8*$i,"</td><br>";
         echo '</tr>';
     }
     echo '</div>';
    
     echo '<div class="todast">';
     for ($i=1; $i <=10 ; $i++) { 
     
         echo'<tr>';
        echo  "<td class='h1'> 9 X $i=",9*$i,"</td><br>";
         echo '</tr>';
     }
     echo '</div>';
    
     echo '<div class="todast">';
     for ($i=1; $i <=10 ; $i++) { 
     
         echo'<tr>';
        echo  "<td class='h1'>10 X $i=",10*$i,"</td><br>";
         echo '</tr>';
     }
     echo '</div>';
    
     echo '<div class="todast">';
     for ($i=1; $i <=10 ; $i++) { 
     
         echo'<tr>';
        echo  "<td class='h1'> 11 X $i=",11*$i,"</td><br>";
         echo '</tr>';
     }
     echo '</div>';
    
     echo '<div class="todast">';
     for ($i=1; $i <=10 ; $i++) { 
     
         echo'<tr>';
        echo  "<td class='h1'> 12 X $i=",12*$i,"</td><br>";
         echo '</tr>';
     }
     echo '</div>';
}
    ?>

    
</body>
</html>