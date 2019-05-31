<?php

echo md5('123');
echo '<br>';
echo md5('124');

echo h1('Labas');
foreach(range(0,1) as $val){
    echo h1(span('Jonai'));
}

echo lalaba('Kapitonai');

echo h('LAIVAI', 1);


function span($lala)
{
    return '<span style="color:rgb('.c().','.c().','.c().');">' . $lala . '</span>';
}

function c(){
    return rand(0, 255);
}

function h1($lala)
{
    return '<h1>' . $lala . '</h1>';
}

function lalaba($lala)
{
    return '<h2>' . $lala . '</h2>';
}

function h($text, $h = 3)
{
    return '<h'.$h.'>' . $text . '</h'.$h.'>';
}