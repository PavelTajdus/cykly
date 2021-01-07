<?php

// While
// https://www.php.net/manual/en/control-structures.while.php

$a = 1;
while ($a <= 10) {
    // echo "While smyčka: " . $a . "<br>";
    $a++;
}


// Do ... While
// https://www.php.net/manual/en/control-structures.do.while.php

$b = 1;
do {
    // echo "Do ... While smyčka: " . $b . "<br>";
    $b++;
} while ($b <= 20);


// For
// https://www.php.net/manual/en/control-structures.for.php
$idcka = array();

// smyčka for se provede 200x
for ($i = 1; $i <= 200; $i++) {

    // do while nám generuje náhodné číslo a ověřuje, zda-li už není toto číslo vygenerováno
    do {
        $id = rand(100, 999);
    } while (in_array($id, $idcka));

    $idcka[] = $id;
}
// Seřazení hodnot v poli pomocí funkce asort()
// https://www.php.net/manual/en/array.sorting.php
asort($idcka);

// Foreach
// https://www.php.net/manual/en/control-structures.foreach.php
foreach ($idcka as $hodnota) {
    // echo $hodnota . "<br>";
}

$zaci = array(
    "Martin" => 456,
    "Tereza" => 654,
    "Terka" => 111,
    "Natálie" => 222,
    "Pepa" => 333,
    "Pavel" => 444,
);

foreach ($zaci as $zak) {
    echo $zak . "<br>";
}

foreach ($zaci as $klic => $hodnota) {
    echo "Klíč " . $klic . " má hodnotu: " . $hodnota . "<br>";
}
