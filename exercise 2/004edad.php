
<h1><a href="004edad.php?edad=33">Default edad</a></h1>
<?php
/*
004edad.php: Sabiendo la edad de una persona, mostrar la edad que
tendrá dentro de 10 años y hace 10 años. Además, muestra qué año será en
cada uno de los casos. Finalmente, muestra el año de jubilación suponiendo
que trabajarás hasta los 67 años. En este caso, no hace falta que
previamente crees un formulario, puedes probar el ejercicio vía URL:
004edad.php?edad=33. Tip: $anyoActual = date("Y");
*/
const RETIRE = 67 ;
$age=$_GET['edad'];
$year=date("Y");
echo "<p>En dos años tendra: ". ($age + 2) ." </p><br /> 
<p>hace dos años tenia: ". ($age - 2) ."</p><br /> <p>se jubilará en:".($year+(RETIRE-$age)) ."</p><br />"
?>