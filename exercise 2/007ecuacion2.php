<?php 
/*7.007ecuacion2.php: Crea un programa que resuelva una ecuación de 2º grado
del tipo ax² + bx + c = 0. Ten en cuenta que puede tener 2, 1 o no tener solución
dependiendo del valor del discriminante b²-4ac.Tip: Para calcular 
la raíz cuadrada deberás utilizar la función sqrt() */
$a=1;
$b=2;
$c=3;

// -5,1,6 (dos soluciones) -1,+1
// 1,0,49 NO SOL

$value = check_discriminant($a,$b,$c);
function check_discriminant($a,$b,$c)  {
    $value = ($b**2-4*$a*$c < 0)?false:true;
    return $value;
}
function calc_top($a,$b,$c) : int { // ? buena praxis¿?¿?
    return (sqrt($b**2-4*$a*$c));
}
 $sol = ($value===true)?calc_top($a,$b,$c): "No existe solución real para esos valores";
 
 
 
 echo "$sol"

?>