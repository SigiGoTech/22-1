<?php
$masyvas = [];
foreach(range(0,29) as $val) {
    $masyvas[] = rand(5, 25);
}

echo '<pre>';
// print_r($masyvas);

// A
$skaitiklis = 0;
foreach($masyvas as $val) {
    if ($val > 10) {
        $skaitiklis++;
    }
}
// echo '<br>';
// echo $skaitiklis;

$did = $masyvas[0];
foreach($masyvas as $val) {
    if ($val > $did) {
        $did = $val;
    }
}
// echo '<br>';
// echo $did;

$kitas = [];
foreach($masyvas as $key => $val) {
    $kitas[29-$key] = $val;
}
// echo '<br>';
// ksort($kitas);
// print_r($kitas);


foreach(range(0,9) as $val) {
    $masyvas[] = rand(5, 25);
}
//print_r($masyvas);

$masyvas = [];

foreach(range(0,9) as $val1) {
    if(rand(0,3)){
        $masyvas[$val1] = [];
        foreach(range(0,rand(0, 10)) as $val2) {
            $masyvas[$val1][$val2] = rand(5, 25);
        }
    }
    else {
        $masyvas[$val1] = rand(5, 25);
    }
}




print_r($masyvas);
$skaitiklis = 0;
foreach($masyvas as $val1) {
    if (is_array($val1)) {
        foreach($val1 as $val2) {
            if ($val2 > 10) {
                $skaitiklis++;
            }
        }
    }
    else {
        if ($val1 > 10) {
            $skaitiklis++;
        }
    }

}

echo '<br>';
echo $skaitiklis;
echo '<br>';echo '<br>';echo '<br>';echo '<br>';








$m = ['vienas', 'du', 'trys', 'keturi'];

// foreach ($m as &$val){
//     echo $val .'<br>';
// }

// unset($val);
// $m[2] = null;

foreach ($m as $val){
    echo $val .'<br>';
}

print_r($m);

$A ="labas";

function keitiklis(&$masyvas, $isko, $ika)
{
    global $A;
    echo $A;
    if(isset($masyvas[$isko]) && isset($masyvas[$ika]) && $isko!=$ika) {
        $t = $masyvas[$ika];
        $masyvas[$ika] = $masyvas[$isko];
        $masyvas[$isko] = $t;
    }
    else {
        echo 'rekia';
    }
}

keitiklis($m, 10, 3);

print_r($m);