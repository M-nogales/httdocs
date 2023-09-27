<?php 
/*
6.006etapa.php: A partir de una edad muestra por pantalla:
bebé si tiene menos de 3 años
niño si tiene entre 3 y 12 años
adolescente entre 13 y 17 años
adulto entre 18 y 66
jubilado a partir de 67
*/
$age=67;
$message= 
    $age<=3 ? "bebé": (
    $age<=12 ? "niño": (
    $age<=18 ? "adolescente": (
    $age<=66 ? "adulto" :"jubilado"
    )    
    )


);

echo "$message";
?>
