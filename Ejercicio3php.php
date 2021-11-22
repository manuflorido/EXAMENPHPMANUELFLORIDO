<?php
//Ejercicio 3 Manuel Florido
$operador = $_POST["operacion"];
//Recoger Array
$array=$_POST["array"];
$ent1=$array["ent1"];
$ent2=$array["ent2"];
$ent3=$array["ent3"];
$ent4=$array["ent4"];
$ent5=$array["ent5"];

//Funciones
function quip($array){
    $res=array_shift($array);
    print_r($array);
}

function quiu($array){
    array_pop($array);
    print_r($array);
}

function sorti($array){
    krsort($array);
    print_r($array);
}

function div($array){
    $res=array_chunk($array,3);
    print_r($res);
}

switch ($operador) {
    case 'quip':
        quip($array);
        break;
    case 'quiu':
        quiu($array);
        break;
    case 'sorti':
        sorti($array);
        break;
    case 'div':
        div($array);
        break;
    default:
        echo "La has liado";
        break;
    }


?>