<?php 
/* Escribe un programa que almacene en variables tu nombre, primer apellido, segundo apellido,
email, año en el que naciste y móvil. Luego muéstralos por pantalla dentro de una tabla. */
$name = "Manuel";
$surname = "Nogales";
$second_surname = "Serrano";
$email = "manuelnogalesserrano5221@gmail.com";
$date_of_born = 07/08/2002;
$phone = 06160616;
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