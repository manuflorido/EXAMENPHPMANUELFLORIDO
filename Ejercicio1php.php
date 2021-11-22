<?php
//Ejercicio1 Manuel Florido
//Recogida de datos
$num=$_POST["num"];
$alea=$_POST["alea"];
$numAle=rand(0,2048);

//Condición para número aleatorio
if ($alea == "Si") {
    $num = $numAle;
}

//Funciones
function dab($num){
    $res=decbin($num);
    echo "El número " . $num . " es igual a " . $res . " en binario";
}

function dao($num){
    $res=decoct($num);
    echo "El número " . $num . " es igual a " . $res . " en octal";
}

function dah($num){
    $res=dechex($num);
    echo "El número " . $num . " es igual a " . $res . " en hexadecimal";
}

function bad($num){
    $res=bindec($num);
    echo "El número " . $num . " es igual a " . $res . " en decimal";
}

function oad($num){
    $res=octdec($num);
    echo "El número " . $num . " es igual a " . $res . " en decimal";
}

function had($num){
    $res=hexdec($num);
    echo "El número " . $num . " es igual a " . $res . " en decimal";
}

//Switch para opciones
$operador=$_POST["operacion"];
switch ($operador) {
    case 'dab':
        dab($num);
        break;
    case 'dao':
        dao($num);
        break;
    case 'dah':
        dah($num);
        break;
    case 'bad':
        bad($num);
        break;
    case 'oad':
        oad($num);
        break;
    case 'had':
        had($num);
        break;
    default:
        echo "La has liado";
        break;
}
?>