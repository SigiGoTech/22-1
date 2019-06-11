<?php

// skaitome csv faila
$csv = [];
if (($handle = fopen("failas.csv", "r")) !== FALSE) {// atsidarome faila
    while (($data = fgetcsv($handle, 1000, ";")) !== FALSE) {// skaitome po viena eilute
        $csv[] = $data; 
    }
    fclose($handle);// uzdarome faila
}







$servername = "localhost";
$username = "root";
$password = "123";
$db = 'ka_norim';

// Prisijungiam prie serverio
$conn = mysqli_connect($servername, $username, $password, $db);

// Patikrinam prisijungimą
if (!$conn) {
   die("Connection failed: " . mysqli_connect_error());
}
echo "Connected successfully";

mysqli_set_charset($conn,'utf8');// pakeiciam duomenu rasyma i utf-8 formata, kad butu LT raides

// kuriame lentele, jeigu dar tokios nera
$sql = "CREATE TABLE IF NOT EXISTS lenta (
    id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    prekes_pavadinimas VARCHAR(100) NOT NULL,
    prekes_vienetas VARCHAR(30),
    prekes_pozymiai VARCHAR(30),
    valiuta VARCHAR(3) NOT NULL,
    kaina INT(6) UNSIGNED NOT NULL
    )
    CHARACTER SET utf8 COLLATE utf8_general_ci;";
   
    if (mysqli_query($conn, $sql)) {// siunciame lenteles sukurimo koda i db
        echo "Table lenta created successfully";
    } else {
        echo "Error creating table: " . mysqli_error($conn);
    }



    array_shift($csv);// ismetam pirma eilute su stulpeliu pavadinimais

    foreach($csv as $val) {// rasome po viena eilute i db

    $sql = "INSERT INTO lenta (prekes_pavadinimas, prekes_vienetas, prekes_pozymiai, valiuta, kaina)
    VALUES ('".$val[0]."', '".$val[1]."', '".$val[2]."', '".$val[3]."', '".$val[4]."')";

    mysqli_query($conn, $sql);

    }





    echo '<pre>';

// print_r($csv);

$sql = "SELECT * FROM lenta WHERE kaina < 1000";// isrenkame prekes kuriu kaina mazesne nei 1000
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
   // kiekvieną eilutę atskirai
   while($row = mysqli_fetch_assoc($result)) {
       $rez[] = $row;// po viena eilute rasome i masyva
   }
} else {
   echo "0 results";
}

// pridedam stulpeliu pavadinimus
$exp = 'Prekės pavadinimas;Prekės vienetas;Prekės požymiai;Prekės valiuta;Kaina: -default- - prekės kaina';
foreach ($rez as $val) {
    $exp =  $exp ."\n";
    array_shift($val);// ismetam id stulpeli
    $first = true; // pirmas duomuo eiluteje. reikia tam, kad po paskutinio duomens nebutu kabliataskio
    foreach ($val as $val1) {// rasome duomenis atskirdami kabliataskiais
        if($first) {
            $exp = $exp. $val1;
            $first = false;
        }
        else {
            $exp = $exp. ';' . $val1;
        }
        
    }
}
file_put_contents('exportas.csv', $exp); //irasome i faila

