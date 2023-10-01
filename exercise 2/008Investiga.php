<?php
/**008Investiga para qué sirve la instrucción match(),
 *  disponible desde PHP8 (https://www.php.net/manual/es/control-structures.match.php).
 *  Explica con un par de l√≠neas su propósito y mediante código demuestra su uso. */
/**
 ** La instrucción match() tiene como proposito comparar una o varias condiciones u valores 
 ** antes de ejecutar una parte del codigo, en caso de existir dentro de esta instrucción varios condicionales
 ** "anidados" funcionará de la misma forma que un switch, escogiendo la primera condicion que se encuentre y no ejecutando el
 ** resto del codigo.Ademas en caso de existir varias expresiones para un mismo codigo a devolver, todas ellas han de cumplir
 ** la comparación.
 ** EJ:EJER 006
 */
$age=67;
$message= match(true){
    $age<=3 => "bebé",
    $age<=12 => "niño",
    $age<=18 => "adolescente",
    $age<=66 => "adulto" ,
    default => "jubilado", // valor que utilizara de no coincidir los demás
};
echo "$message";
?>
<?php
// ! Apuntes propios
function days_in_month(string $month, $year): int

{

    return match(strtolower(substr($month, 0, 3))) {

        'apr', 'jun', 'sep',  'nov'  => 30,        

        'jan', 'mar', 'may', 'jul', 'aug',  'oct', 'dec'  => 31,

 //       'feb' => is_leap($year) ? 29 : 28,

        default => throw new InvalidArgumentException("Bogus month"),

    };

}

?>