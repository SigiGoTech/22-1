<?php


$csv = [];
if (($handle = fopen("failas.csv", "r")) !== FALSE) {
    while (($data = fgetcsv($handle, 1000, ";")) !== FALSE) {
        $csv[] = $data;
    }
    fclose($handle);
}



$csv[] = ['Rankinė', 'Rankinė', 'Rankinė', 'RankinŽŽŽŽŽŽ', 6];



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

mysqli_set_charset($conn,'utf8');

$sql = "CREATE TABLE IF NOT EXISTS lenta (
    id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    prekes_pavadinimas VARCHAR(100) NOT NULL,
    prekes_vienetas VARCHAR(30),
    prekes_pozymiai VARCHAR(30),
    valiuta VARCHAR(3) NOT NULL,
    kaina INT(6) UNSIGNED NOT NULL
    )
    CHARACTER SET utf8 COLLATE utf8_general_ci;";
   
    if (mysqli_query($conn, $sql)) {
        echo "Table lenta created successfully";
    } else {
        echo "Error creating table: " . mysqli_error($conn);
    }



    // array_shift($csv);

    // foreach($csv as $val) {

    // $sql = "INSERT INTO lenta (prekes_pavadinimas, prekes_vienetas, prekes_pozymiai, valiuta, kaina)
    // VALUES ('".$val[0]."', '".$val[1]."', '".$val[2]."', '".$val[3]."', '".$val[4]."')";

    // mysqli_query($conn, $sql);

    // }





    echo '<pre>';

// print_r($csv);

$sql = "SELECT * FROM lenta WHERE kaina < 1000";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
   // kiekvieną eilutę atskirai
   while($row = mysqli_fetch_assoc($result)) {
       $rez[] = $row;
   }
} else {
   echo "0 results";
}

$exp = 'Prekės pavadinimas;Prekės vienetas;Prekės požymiai;Prekės valiuta;Kaina: -default- - prekės kaina';
foreach ($rez as $val) {
    $exp =  $exp ."\n";
    array_shift($val);
    foreach ($val as $val1) {
        $exp = $exp. $val1 . ';';
    }
    
}

file_put_contents('exportas.csv', $exp);

