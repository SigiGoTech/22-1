<?php
    require 'bootstrap.php';

    if ($_SESSION['login'] != 1) {// jeigu neprisijunge
        header('Location: '.$url.'login.php');
        die(); // viskas
    }


?>
<h2>INdex</h2>