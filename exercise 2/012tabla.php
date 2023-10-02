<?php
/**012formulario.html y 012tabla.php: A partir de un número de filas y columnas,
 * crear una tabla con ese tamaño.
 * Las celdas deben estar rellenadas con los valores de las coordenadas de cada celda. */
$row=5;
$column=5;
echo '<table border="1">
<tbody>';
// * $i y $j +1 para que las columnas y filas sean de la misma cantidad que las puestas
for ($i=1; $i <= $row; $i++) {
    echo "<tr>";
    for ($j=1; $j <= $column; $j++) { 
        echo "<td>( ".$i.",".$j." )</td>";  // (i,j)
    }
    echo "</tr>";
}
echo "</tbody></table>";
?>