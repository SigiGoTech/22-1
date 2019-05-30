<?php
echo '<span style="word-break: break-all">';
for ($x = 1; $x <= 400; $x++) {
   echo '*';
}
echo '</span>';
echo '<br>';echo '<br>';echo '<br>';echo '<br>';echo '<br>';


for ($x = 1; $x <= 400; $x++) {
   echo '*';
   if (!($x%50)) {
    echo '<br>'; 
   }
}

echo '<br>';echo '<br>';echo '<br>';echo '<br>';echo '<br>';

$didesni_150 = 0;
for ($x = 1; $x <= 300; $x++) {

    $skaicius = rand(0, 300);

    if ($skaicius > 150) {
        $didesni_150++;
    }

    if ($skaicius > 275) {
        echo '<b style="color:red;">' . $skaicius . ' </b>';
    }
    else {
        echo $skaicius . ' ';
    }
    
}
echo '<br>didesniu: ' . $didesni_150;


echo '<br>';echo '<br>';echo '<br>';echo '<br>';echo '<br>';

$pirmas = true;
for ($x = 1; $x <= 77; $x++) {

    if (!($x%77)) {
        if ($pirmas) {
            echo $x;
            $pirmas = false;
        }
        else {
            echo ', '.$x;
        }
    }

}

echo '<br>';echo '<br>';echo '<br>';echo '<br>';echo '<br>';

for ($x = 1; $x <= 10; $x++) {

    echo '<br>';

    for ($y = 1; $y <= 10; $y++) {

        if ($x == $y) {
            echo '<h1 style="color: red; margin: 0 8px; display: inline;">*</h1>';
        }
        elseif ($x == 11 - $y) {
            echo '<h1 style="color: red; margin: 0 8px; display: inline;">*</h1>';
        }
        else {
            echo '<h1 style="color: black; margin: 0 8px; display: inline;">*</h1>';
        }
        

    }
}


echo '<br>';echo '<br>';echo '<br>';echo '<br>';echo '<br>';

for ($x = 1; $x <= 11; $x++) {

    echo '<br>';

    for ($y = 1; $y <= 11; $y++) {

        if ($y == 1 || $y == 11) {
            echo '<h1 style="color: red; margin: 0 8px; display: inline;">*</h1>';
        }
        elseif ($x == $y && $x <= 6) {
            echo '<h1 style="color: red; margin: 0 8px; display: inline;">*</h1>';
        }
        elseif ($x == 12 - $y && $x <= 6) {
            echo '<h1 style="color: red; margin: 0 8px; display: inline;">*</h1>';
        }
        else {
            echo '<h1 style="color: black; margin: 0 8px; display: inline;">*</h1>';
        }
        
        

    }
}



echo '<br>';echo '<br>';echo '<br>';echo '<br>';echo '<br>';

$kartai1 = 0;
$herbai = 0;
do {
    $result = (rand(0,1)===0) ? 'H' : 'S';
    $kartai++;

    if ($result == 'H') {
        $herbai++;
    }
    else {
        $herbai = 0;
    }

}while($herbai < 3);

//echo $kartai;



echo '<br>';echo '<br>';echo '<br>';echo '<br>';echo '<br>';

$kartai1 = 0;
$kartai2 = 0;
$kartai3 = 0;

for ($t = 1; $t <= 300; $t++) {


for ($x = 1; $x <= 3; $x++) {
$vinis = 85;

    while($vinis > 0) {
        $smugis = rand(5, 20);
        $vinis -= $smugis;
        $kartai1++;
    }

}
// echo $kartai;


// echo '<br>';


for ($x = 1; $x <= 3; $x++) {
$vinis = 85;
    while($vinis > 0) {
        $smugis = rand(20, 30);
        if (rand(0,1)) {
            $vinis -= $smugis;
        }
        $kartai2++;
    }
}
// echo $kartai;


// echo '<br>';


for ($x = 1; $x <= 3; $x++) {
$vinis = 85;
    while($vinis > 0) {
        //tikimybes skaiciavimas

        $ikalimas = (85 - $vinis) * 85/100;
        $tikimybe = ($ikalimas/50)*30+25;



        $smugis = rand(5, 45);
        $atsitikimas = rand(0,100);
        if ($atsitikimas <= $tikimybe) {
            $vinis -= $smugis;
        }
        $kartai3++;
    }
}

}


 echo $kartai1.'-'.$kartai2.'-'.$kartai3;