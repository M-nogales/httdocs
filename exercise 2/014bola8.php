<?php
/**014bola8.html: Prepara un formulario con una caja de texto que realice a una pregunta al usuario.
 * 014bola8.php: A partir del anterior, crea un programa que muestre la pregunta recibida
 * y genere una respuesta de manera aleatoria entre un conjunto de respuestas predefinidas,
 * almacenadas en un array: Sí, no, quizás, claro que sí, por supuesto que no, no lo tengo claro,
 * seguro, yo diría que sí, ni de coña, etc...
Este ejercicio se basa en el juego de la Bola 8 mágica.
 */
$user_answer="respuesta de usuario adawd";
$min = 0;
$max = 8;
$respuestas = [
"Sí",
"No",
"Quizás",
"Claro que sí",
"Por supuesto que no",
"No lo tengo claro",
"Seguro",
"Yo diría que sí",
"Ni de coña"];

echo "<p> ".$respuestas[random_int($min, $max)] ." </p>";
?>