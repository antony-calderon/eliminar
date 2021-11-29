<?php
//$animales = ["perro", "gato", "araña", "elefante"];
$animales[0]=[
    "nombre" => "Perro",
    "accion" => "ladra"
];
$animales[1]=[
    "nombre" => "Gato",
    "accion" => "mauya"
];


?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Animales</title>
</head>

<body>
    <h1>Animales</h1>
    <hr>
    <?php
        /*for($i = 0; $i <= count($animales)-1; $i++){
            echo "el nombre del animal " .($i+1). " es: ". $animales[$i]["nombre"]."<br>";
            echo "la accion del animal " .($i+1). " es: ". $animales[$i]["accion"]."<br>";
            echo "<hr>";
        }*/
        foreach($animales as $animal){
            echo "el nombre del animal es: ". $animal["nombre"]."<br>";
            echo "la accion del animal es: ". $animal["accion"]."<br>";
            echo "<hr>";
        }
            
        
    ?>
</body>

</html>