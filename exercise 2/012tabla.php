<?php
/**012formulario.html y 012tabla.php: A partir de un número de filas y columnas,
 * crear una tabla con ese tamaño.
 * Las celdas deben estar rellenadas con los valores de las coordenadas de cada celda. */
$row=0;
$column=0;
echo '<table="1">
<tbody>';
// * $i y $j +1 para que las columnas y filas sean de la misma cantidad que las puestas
for ($i=1; $i <= $row; $i++) {
    echo "<tr>";
    for ($j=2; $j <= $column; $j++) { 
        echo "<td>..</td>";  // (i,j)
    }
    echo "</tr>";
}
echo "</tbody>"
?>