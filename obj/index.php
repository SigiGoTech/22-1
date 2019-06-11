<?php


require 'Namas.php';
require 'Zmogus.php';

Namas::valio();

$troba1 = Zmogus::create('Petras', 'Krikaliunas');
$troba2 = Zmogus::create('Onute', 'Lelinaite');


// echo $troba1->stogas;
// $troba2->aukstu_skaicius = 16;

// $troba1->stogas = 'skarda';
// $troba2->stogas = 'smala';

echo '<pre>';

echo $troba1->get_stogas();
echo '<br>';
$troba1->set_stogas('skarda');
echo '<br>';
echo $troba1->get_stogas();
echo '<br>';
echo $troba1->get_aukstus();
echo '<br>';
echo $troba1->get_namo_stoga();
echo '<br>';
echo $troba1->la();
echo '<br>';



print_r($troba1);
print_r($troba2);