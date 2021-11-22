<?php
//Ejercicio 2 Manuel Florido
    $text1=$_POST["text1"];
    $text2=$_POST["text2"];
    $text3=$_POST["text3"];

//Funciones
function textmay($text1){
    $res=strtoupper($text1);
    echo "Texto en mayúscula: " . $res;
}

function deso($text1){
    $res=str_shuffle($text1);
    echo "Texto desordenado: " . $res;
}

function sep($text1){
    $res=str_split($text1);
    print_r($res);
}

function cuenta($text1){
    $res=strlen($text1);
    echo "Total de caracteres: " . $res;
}

function reemplaza($text3,$text2,$text1){
    $res=str_replace($text3,$text2,$text1);
    echo "El nuevo orden es: " . $res;
}

//Switch
$operador = $_POST["operacion"];
switch ($operador) {
    case 'mayu':
        textmay($text1);
        break;
    case 'deso':
        deso($text1);
        break;
    case 'array':
        sep($text1);
        break;
    case 'cuenta':
        cuenta($text1);
        break;
    case 'reem':
        reemplaza($text3,$text2,$text1);
        break;
    default:
        echo "La has liado";
        break;
    }
?>