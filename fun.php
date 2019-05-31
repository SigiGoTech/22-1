<?php

echo sudeti(7);


function sudeti($vienas, $du = 22)
{
   $rezultatas = $vienas + $du;
   return $rezultatas;
}


echo '<br>';

function vidurkis(...$skaiciai)
{
   $sudetis = 0;
   foreach ($skaiciai as $val)
 {
   $sudetis += $val;
 }
 $vidurkis = $sudetis / count($skaiciai);
 return $vidurkis;
}


echo vidurkis(0,1,2,3,4,5,6,7,8,9,10,13,14,15,16,17,18,19,20);


