<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

    /*
    $numero = 0;
    
    if ($numero>0) {
        echo "<p> El numero es positivo</p>";
    } elseif($numero==0){
        echo "<p> El numero es 0 </p>";

    }
     else{
        echo "<p> El numero no es positivo </p>";
    }
        */

    /*$numero = 66;
    # Rangos: [-10.0), [0,10], (10,20]

    if($numero >= -10 && $numero < 0){
        echo "El numero $numero esta en el rango [-10,0)";
    }elseif($numero>0 && $numero<=10){
        echo "El numero $numero esta en el rango [0,10]";

    }elseif($numero>10 && $numero <=20){
        echo "El numero $numero esta en el rango (10,20]";

    }else{
        echo "El numero $numero no esta en ninguno de los rangos";
    } 
    */

    $numero1 = 3;
    $numero2= 4;

    
    if($numero1<$numero2){
        echo "$numero2 es mayor que $numero1";

    }elseif($numero1>$numero2){
        echo "$numero1 es mayor que $numero2";

    }else{
        echo "Los dos numeros son iguales";
    }
    ?>
</body>
</html>