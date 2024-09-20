<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fechas</title>
</head>
<body>

<?php 

//echo date ("l");

$dia = date ("j");

if($dia%2==0){
    echo "es par";

}else{
    echo "es impar";
}


?>
    
</body>
</html>