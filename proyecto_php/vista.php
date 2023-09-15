<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css.css">
    <title>Multiplicar</title>
</head>
<body  background="math.png">
    <center>
    <div class="container">
    <form  action='tabla.php' method="post">
        <p>Digite la tabla de Multiplicar</p>
      <input class="inputext"type="number" name="numero" id="numero" placeholder="Digite un numero" required>
      <br>
     <select class="inputext" name="select" required>
    <option value="">-Selecione Tabla-</option>
    <option value="1"> Multiplicar</option>
    <option value="2">Division</option>
    <option value="3">Resta</option>
    <option value="4">Suma</option>
    </select>
      <br>
    
      <input type="submit" value="Generar Tabla">
    </form>
    
    
    
    <form  action='todas_tablas.php' method="post">
        
      <input type="submit" name="todast" value="Generar Todas Tablas MULTIPLICAR 1-12">
    </form>
    
    
    </div>

    </center>
</body>
</html>