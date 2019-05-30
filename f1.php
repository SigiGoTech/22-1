<?php session_start() ?>
Sugeneruotas skaicius:
<?php

if(!empty($_GET['page'])){

if ($_GET['page'] == 1) {
    echo $sk = rand(1,50);
    echo 'Pirmas';
}
elseif ($_GET['page'] == 2) {
    echo $sk = rand(50,100);
    echo 'Antras';
}
elseif ($_GET['page'] == 3) {
    echo $sk = rand(101,150);
    echo 'Trecias';
}
}

?>
<br>
Pries tai buves skaicius: 
<?php
echo $_SESSION['mano_sk'] ?? 'dar nera';

$_SESSION['mano_sk'] = $sk; 
?>
<a href="?page=1">Pirmas</a><br>
<a href="?page=2">Antras</a><br>
<a href="?page=3">Trecias</a><br>