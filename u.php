<?php
session_start();

//pirma karta priskiriam tuscia masyva
if(!isset($_SESSION['skaiciuokle'])) {
    $_SESSION['skaiciuokle'] = [];// lygi tusciam masyvui
}

if(!empty($_POST)) {
    $skaicius = (int) $_POST['sk'];
}

//1.

else {
$skaicius = rand(100, 500);
}

//2. 

$masyvas = [];
foreach(range(0, $skaicius-1) as $val){
    $masyvas[] = 'A';// automatiskai priskiriamas indeksas
}


//3. 

foreach($masyvas as $key => $val){
    if($key%2) {
        $masyvas[$key] = 'B';
    }
}

//Perdavimas pagal rodykle
// foreach($masyvas as $key => &$val){
//     if($key%2) {
//         $val = 'B';
//     }
// }

//4.

shuffle($masyvas);

//5. 

foreach($masyvas as $key => $val){
    if($key%2) {
        $masyvas[$key] = 'C';
    }
}

//6. 
$a = $b = $c = 0;
foreach($masyvas as $key => $val){
    if($val=='A') {
        $a++;
    }
    elseif($val=='B') {
        $b++;
    }
    else {
        $c++;
    }
}

$_SESSION['skaiciuokle'][] = [$a, $b, $c];

if(count($_SESSION['skaiciuokle'])>5) {
    array_shift($_SESSION['skaiciuokle']);
}

?>

<form action="" method="POST">
  Skaicius:  <input type="text" name="sk">
  <br>
  <input type="submit" value="Submit">
</form> 

<?php

foreach($_SESSION['skaiciuokle'] as $val) {
    echo "A: $val[0] B: $val[1] C: $val[2] <br>";
}
