<?php
/*
005dinero.php: A partir de una cantidad de dinero, mostrar su
descomposición en billetes (500, 200, 100, 50, 20, 10, 5) y monedas (2, 1),
para que el número de elementos sea mínimo. No se utilizar ninguna
instrucción condicional. Por ejemplo, al introducir 138 debe mostrar:
1 billete de 100
0 billete de 50
1 billete de 20
1 billete de 10
1 billete de 5
1 moneda de 2
2 monedas de 1
Tip: Puedes forzar a realizar la división entera mediante la función
intdiv($dividendo, $divisor) o pasar un número flotante a entero puedes
usar la función intval().
*/
function split_numbers ($money){
    $cash = [500, 200, 100, 50, 20, 10, 5, 2, 1];

    // todo count max array

    for ($i = 0; $i < count($cash); $i++) { // ? count cash == cash.lenght()

        $result = intdiv($money, $cash[$i]);// todo (int)(money / cash[i])
        if ($result > 0) {
            $msg=($cash[$i]<5)? $result. "monedas de ". $cash[$i]: $result. " billetes de ". $cash[$i]; //? cociente cantidad de billetes
            echo "$msg <br />";
        }
        $money %= $cash[$i];
    }

}
$money = 187;/*887*/
split_numbers($money);// ! error?

?>