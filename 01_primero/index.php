<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Index</title>
</head>
<body>
    <?php
    define ("EDAD", 25);
    //$var = "hola mundo";
    //echo $var
    var_dump($var);
    $var=3;
    var_dump($var);
    //$var = FALSE;
    var_dump($var);

    echo EDAD;
    echo "<br>";
    echo "La variable es $var";
    echo "<br>";
    $frase1 = "hola";
    $frase2 = "mundo";

    echo "<p>$frase1 " . "$frase2</p>";

    ?>
</body>
</html>