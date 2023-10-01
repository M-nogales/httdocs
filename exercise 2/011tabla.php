<?php
/**011tabla.php: Muestra dentro de una tabla HTML la tabla de multiplicar 
 *del número que reciba como parámetro.
 *Utiliza <thead> con sus respectivos <th> y <tbody> para dibujar la tabla. Por ejemplo:
a	*	b	=	a*b
7	*	1	=	7
7	*	2	=	14
...				
7	*	10	=	70
*/
$valor=5;
 echo '<table border="1">'; // ! '' si dentro hay "" 
 echo "<thead>

     <tr>
         <th>a </th>
         <th>* </th>
         <th>b </th>
         <th>= </th>
         <th>ab </th>
     </tr>
 </thead>
 <tbody>";

for ($i=0; $i <= 10; $i++) { 
    $result= $valor * $i;
    echo " <tbody>
    <tr>
    <th>$valor</th>
    <th>*</th>
    <th>$i</th>
    <th>=</th>
    <th>$result</th>
    </tr>";
}
echo "</tbody>
</table>";
?>