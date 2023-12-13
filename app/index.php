<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
        $numero1 = $_GET['numero1'];
        $numero2 = $_GET['numero2'];
        $suma = $numero1 + $numero2;
        echo 'La suma de ' .$numero1. ' y ' .$numero2. ' es ' .$suma ;
    ?>
    <form action="index.php">
        <label>Número 1:</label>
        <input name="numero1">
        <label>Número 2:</label>
        <input name="numero2" >
        <button>Suma</button>
    </form> 

    <h1>Productos</h1>
    <ul>
        
    </ul>
</body>
</html>

