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

    if(empty(array_diff($teisingi, $_POST[$id]))) {
        $rez[] = ['klausimas' => $val['q'], 'atsakymas' => 'geras'];
    }
    else {
        $rez[] = ['klausimas' => $val['q'], 'atsakymas' => 'blogas'];
    }

}

echo '<pre>';
print_r($rez);
}


function getQuestions()
{
    return json_decode(file_get_contents('klausimai.json'), JSON_OBJECT_AS_ARRAY);// nuskaitom json
}