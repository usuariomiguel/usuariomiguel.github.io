<?php
/*
#Granos de arroz con base de datos

include("./acceso_session.php");
$ngranos = 0;
if (!isset($_COOKIE['leyenda_ajedrez'])) {
        #INSERTAR INFORMACION A TABLA
        $insertar = $conexion_bdsession->prepare('INSERT INTO session (nsessiones) VALUES (1);');
        $insertar ->execute();
    } else {
        #MODIFICAR DATOS
        $modificar = $conexion_bdsession->prepare('UPDATE session SET nsessiones = nsessiones * 2;');
        $modificar->execute();
    }

$select = $conexion_bdsession->query('SELECT nsessiones FROM session;');
$ses = $select->fetch(PDO::FETCH_OBJ);
$ngranos = $ses->nsessiones;

setcookie('leyenda_ajedrez',$ngranos);

#Granos de arroz sin base de datos

if (!isset($_COOKIE['cookie'])) {
    $valor = 1;
} else {
    $valor = $_COOKIE['cookie'];
    $valor = $valor * 2;
}
setcookie('cookie',$valor);
*/
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listado Pokemon</title>
    <link rel="stylesheet" href="style.css">
</head>
<body id="menu_principal">
    <div id="div_titulo">
        <h1>Listado de Pokemons</h1>
    </div>

    <hr><br>
    <button onclick="document.location='./include_abilities.php'">Abilities</button>
    <button onclick="document.location='./include_moves.php'">Moves</button>
    <button onclick="document.location='./include_base_stats.php'">Base stats</button>
    <button onclick="document.location='./include_pokemon.php'">Pokemon</button><br><br>
    <img src=".\src\portada_pokemon.png" width="500" height="250" onclick="document.location='./index.php'"></img>


</body>
</html>