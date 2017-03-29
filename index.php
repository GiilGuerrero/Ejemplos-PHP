<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Index</title>
</head>
<body>
    <h1> 
        <?php 
            #Todas las variables se declaran con $ 
            $num1 = 10;
            $num2 = 20;
            $suma = $num1 + $num2;
            //echo 'Total: $suma'; // las '' dan el nombre de la variable como tal
            //echo "Total: $suma"; // las "" dan el valor de la variable
            echo 'Total' . $suma;  // Concatenaciòn, se utilis el punto (.)
        ?> 
    </h1>
</body>
</html>