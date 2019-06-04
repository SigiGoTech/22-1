<?php
session_start();

$url = 'http://localhost/22/app1/';


require 'nav.php';

//sesijos galiojimas 30 s

if ($_SESSION['login'] == 1) {
    if($_SESSION['time'] + 30 < time()) {
        $_SESSION['login'] = 0;
        header('Location: '.$url.'login.php');
        die();
    }
}


if ($_SESSION['login'] == 1) {// jeigu prisijunges
    $_SESSION['time'] = time();
}



//funkcijos

function addUser($email, $password)
{
    $db = json_decode(file_get_contents('db.json'), JSON_OBJECT_AS_ARRAY);// nuskaitom json
    $db[] = ['email' => $email, 'password' => md5($password)];// irasom i masyva useri
    file_put_contents('db.json', json_encode($db));// irasom json atgal
}

function loginUser($email, $password)
{
    $db = json_decode(file_get_contents('db.json'), JSON_OBJECT_AS_ARRAY);// nuskaitom json
    foreach ($db as $val) {
        if ($val['email'] == $email) {
            if ($val['password'] == md5($password)) {
                return true;
            }
        }
        return false;
    }
}