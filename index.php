<?php

/**$autenticando=true;
$admin=false;

if($autenticando && $admin){
    echo "Usuario autentico correctamente. ";}
else{
    echo "Usuario no auntenticado, inicia sesión. ";
} */ 
 

/**$edad= -12;

if($edad>0){
    if($edad >=18){
    echo "Usted es mayor de edad. ";
    } else {
    echo "Usted es menor de edad. ";
    }
}
else {
    echo "Error, no existen edades negativas. ";
} */


/**$edad= 31;
if ($edad > 0 && $edad <=12) {
    echo "Usted, es un niño";
} elseif ($edad>12 && $edad <= 35){
    echo "Usted, es un joven";
} else {
    echo "Cuidate, estas envejeciendo. ";
} */


/**$multiplicando=1;
$multiplicador=2;
$producto=0;

for($multiplicando=1; $multiplicando<=10; $multiplicando++){
    $producto=$multiplicando*$multiplicador;
    echo "$multiplicando X $multiplicando: $producto. <br>";
} */


/**$multiplicando =1;
$multiplicador =2;
$producto =0;

while($multiplicando <= 10){
    $producto = $multiplicando * $multiplicador;
    echo "$multiplicando X $multiplicador: $producto <br>";
    $multiplicando++;
} 


$edades=[18,20,31,19,20];

echo "Una de las edades que se encuentra en el arreglo es:". $edades[0];

$edades=array(18,20,31,19,20);

echo "Una de las edades que se encuentra en el arreglo es:". $edades[1]; */


/**$cafes=array(
    "Capuchino" => 50,
    "Latte" => 49,
    "Americano" => 70
);

echo "El precio del cafe Americano es de:{$cafes['Americano']}"; */
 
$personas=array(
    "Carlos" => array(
        "Edad" => 20,
        "Correo" => "carlos@espoch.edu.ec",
        "Cedula" => 21004585933
    ),
    "Pedro" => array(
        "Edad" => 31,
        "Correo" => "pedro@espoch.edu.ec",
        "Cedula" => 21004585934
    )
);

echo "La edad de Pedro es: ". $personas["Pedro"]["Edad"];
    
