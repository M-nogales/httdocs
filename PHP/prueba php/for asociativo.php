<h1> PELICULAS </h1>
<?php 
$peliculas = ["El padrino"=> "Michael Corleone", "Titanic"=> "Jack","Forest Gump" => "Forest","Cars"=> "", "Harry Potter" => "Hermione"];
foreach ($peliculas as $peli=>$personaje){
echo "$peli : $personaje <br />";
}

echo $peliculas["Titanic"];
?>