

<?php
// $trecias = 5;
// echo ++$trecias;
// echo $trecias++;
// echo $trecias++;
?> 


<!-- Jonas ir Petras žaidžiai šaškėm. Petras surenka taškų kiekį nuo 10 iki 20, Jonas surenka taškų kiekį nuo 5 iki 25. Išvesti žaidėjų vardus su taškų kiekiu ir
 “Laimėjo: laimėtojo vardas”;
Taškų kiekį generuokite funkcija rand(); -->

<?php

$petras = rand(10, 20);
$jonas = rand(5, 25);

echo "Petras: $petras o Jonas: $jonas";
echo '<br>';
echo 'Petras: ' . $petras . ' Jonas: ' . $jonas;

if ($petras > $jonas) {
    echo 'Laimejo Petras';
}
elseif ($petras < $jonas) {
    echo 'Laimejo Jonas';
}
else {
    echo 'Niekas nelaimejo';
}

$vienas = 5;

$rezultatas = (true) 
? 'AAA' : (true) ? 'BBB' : 'CCC'; 


// $rezultatas  yra 

echo '<br>';
echo $rezultatas;

$vienas = 5;

$rezultatas = $vienas ?? 8;// gražina kai nesetintas 8

echo '<br>';
echo $rezultatas;

$i = 10;

switch ($i) {
    case 0:
        echo "i equals 0";
         break;
    case 1:
        echo "i equals 1";
         break;
    case 2:
        echo "i equals 2";
        break;
    default: echo "hfhfh";
}



echo '<br>';echo '<br>';
// Didesnį padalinkite iš mažesnio ir išveskite rezultatą į ekraną.Naudodami funkciją rand(), sugeneruokite du skaičius nuo 0 iki 100. 

$sk1 = rand(0, 100);// skaicius 1
$sk2 = rand(0, 100);// skaicius 2

echo "skaicius1: $sk1 skaicius2: $sk2";
echo '<br>';echo '<br>';

if(!$sk1 || !$sk2) {
    echo 'dalyba is nulio negalima';
}
else {
    if ($sk1 >= $sk2) {
        echo $sk1 / $sk2;
    }
    else {
        echo $sk2 / $sk1;
    }
}

echo '<br>';echo '<br>';
//Sukurkite keturis kintamuosius ir rand() funkcija sugeneruokite jiems reikšmes nuo 0 iki 2. Suskaičiuokite kiek yra nulių, vienetų ir dvejetų. 


$sk1 = rand(0, 2);// skaicius 1
$sk2 = rand(0, 2);// skaicius 2
$sk3 = rand(0, 2);// skaicius 3
$sk4 = rand(0, 2);// skaicius 4

echo "$sk1 - $sk2 - $sk3 - $sk4";

$nuliai = 0;
$vienetai = 0;
$dvejetai = 0;

if ($sk1 == 2) {
    $dvejetai++;
}
if ($sk2 == 2) {
    $dvejetai++;
}
if ($sk3 == 2) {
    $dvejetai++;
}
if ($sk4 == 2) {
    $dvejetai++;
}

$suma = $sk1 + $sk2 + $sk3 + $sk4;

$vienetai = $suma - $dvejetai * 2;

$nuliai = 4 - $dvejetai - $vienetai;

echo '<br>Dvejetu: ' . $dvejetai;
echo '<br>Vienetai: ' . $vienetai;
echo '<br>Nuliai: ' . $nuliai;


// echo '<br>Dvejetu: ' . $dvejetai;
// $stringas = $sk1.$sk2.$sk3.$sk4;

// $dvejetai = substr_count($stringas, '2');

// echo '<br>Dvejetu: ' . $dvejetai;