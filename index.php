<?php

$autenticando=true;
$admin=false;

if($autenticando && $admin){
    echo "Usuario autentico correctamente. ";}
else{
    echo "Usuario no auntenticado, inicia sesión. ";
} 

<?php
$edad= -12;

if($edad>0){
    if($edad >=18){
    echo "Usted es mayor de edad. ";
    } else {
    echo "Usted es menor de edad. ";
    }
}
else {
    echo "Error, no existen edades negativas. ";
}

<?php
$edad= 31;
if ($edad > 0 && $edad <=12) {
    echo "Usted, es un niño";
} elseif ($edad>12 && $edad <= 35){
    echo "Usted, es un joven";
} else {
    echo "Cuidate, estas envejeciendo. ";
}

