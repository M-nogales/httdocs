<?php 
/* Escribe un programa que almacene en variables tu nombre, primer apellido, segundo apellido,
email, año en el que naciste y móvil. Luego muéstralos por pantalla dentro de una tabla. */

// if(isset($_GET['name']) && isset($_GET['surname']) && isset($_GET['second_surname']) 
// && isset($_GET['email']) && isset($_GET['date_of_born']) && isset($_GET['phone'])) {
//     $nombre = $_GET['nombre'];
//     $apellido = $_GET['apellido'];
//     echo "<p>Nombre: $nombre</p>";
//     echo "<p>Apellido: $apellido</p>";
// } else {
//     echo "<p>No se han recibido datos.</p>";
// }

 /*$respuesta= (isset($_GET['name']) && isset($_GET['surname']) && isset($_GET['second_surname']) && isset($_GET['email']) && isset($_GET['date_of_born']) && isset($_GET['phone']))
? $name = $_GET['name'] $surname = $_GET['surname'] $second_surname = $_GET['second_surname'] $email = $_GET['email'] $date_of_born = $_GET['date_of_born'] $phone=$_GET['phone']
echo "<p>name: $name</p><br /> <p>name: $second_surname</p><br /> <p>name: $phone</p><br />": echo "<p> Nada que enseñar </p>";*/
$respuesta = (isset($_GET['name']) && isset($_GET['surname']) && isset($_GET['second_surname']) && isset($_GET['email']) && isset($_GET['date_of_born']) && isset($_GET['phone']))
    ? "<p>Nombre: {$_GET['name']}</p><br /><p>Apellido: {$_GET['surname']}</p><br /><p>Segundo Apellido: {$_GET['second_surname']}</p><br /><p>Email: {$_GET['email']}</p><br /><p>Fecha de Nacimiento: {$_GET['date_of_born']}</p><br /><p>Teléfono: {$_GET['phone']}</p>"
    : "<p>Nada que enseñar</p>";

echo $respuesta;

?>

    <table border="1">
        <tr>
            <th>Name</th>
            <td> <?=$name?> </td>
        </tr>
        <tr>
            <th>Surname</th>
            <td> <?=$surname?> </td>
        </tr>
        <tr>
            <th>Second surname</th>
            <td> <?=$second_surname?> </td>
        </tr>
        <tr>
            <th>Email</th>
            <td> <?=$email?> </td>
        </tr>
        <tr>
            <th>Born in</th>
            <td> <?=$date_of_born?> </td>
        </tr>
        <tr>
            <th>Phone number</th>
            <td> <?=$phone?> </td>
        </tr>
    </table>