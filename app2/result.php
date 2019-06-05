<?php


if(!empty($_POST)) {

// _dc(getQuestions());
 //_dc($_POST);

$rez = [];

foreach(getQuestions() as $val){
    $id = 'q_' . $val['id'];
    
    if(!isset($_POST[$id])) {
        $rez[] = ['klausimas' => $val['q'], 'atsakymas' => 'blogas'];
        continue;
    }
    $teisingi = (array) $val['correct'];

    if(empty(array_diff($_POST[$id], $teisingi))) {
        $rez[] = ['klausimas' => $val['q'], 'atsakymas' => 'geras'];
    }
    else {
        $rez[] = ['klausimas' => $val['q'], 'atsakymas' => 'blogas'];
    }

}

$blogi = 0;
$geri = 0;

foreach($rez as $val){
    if ($val['atsakymas'] == 'geras') {
        $geri++; 
    }
    else {
        $blogi++;
    }
    
}

if($geri*2 > $blogi) {
    echo "Diplomas yra";
}
else {
    echo "Perlaikyti";
}

echo 'Atsakyta: ' . ($geri/(count($rez))*100) .'%';

}


function getQuestions()
{
    return json_decode(file_get_contents('klausimai.json'), JSON_OBJECT_AS_ARRAY);// nuskaitom json
}