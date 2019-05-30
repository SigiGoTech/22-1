<?php

if(!empty($_POST)) {
    
    if($_POST['bt'] == 'vp') {
        echo 'Pagal varda ir pavarde';
        if($_POST['vardas'] == '' || $_POST['pavarde'] == '') {
            echo 'klaida, nera vardo ar pavardes';
        }
    }

    if($_POST['bt'] == 'ak') {
        echo 'Pagal asmens koda';
        if($_POST['kodas'] == '') {
            echo 'klaida, nera kodo';
        }
    }

}


?>



<form method="POST" action="">

Vardas:<input type="text" name="vardas"><br>
Pavarde:<input type="text" name="pavarde"><br>
Kodas:<input type="text" name="kodas"><br>

<button type="submit" name="bt" value="vp">Pagal Varda ir Pavarde</button>
<button type="submit" name="bt" value="ak">Pagal asmens koda</button>


</form>