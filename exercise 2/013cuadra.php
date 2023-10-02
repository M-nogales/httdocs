<?php
/**013formulario.html y 013cuadrada.php: Basándote en el ejercicio anterior,
 * rellena la tabla de manera que solo los bordes tengan contenido,
 * quedándose el resto de las celdas vacías.
 */
$row=5;
$column=5;
echo '<table border="1">
<tbody>';
// * $i y $j +1 para que las columnas y filas sean de la misma cantidad que las puestas
for ($i=1; $i <= $row; $i++) {
    echo "<tr>";
    for ($j=1; $j <= $column; $j++) { // ! usar match
        $output = ($i === 1 || $j === 1 || $i === $row || $j === $column)?"<td>( ".$i.",".$j." )</td>": "<td> </td>";
        echo "$output";
    }
    echo "</tr>";
}
echo "</tbody></table>";
?>