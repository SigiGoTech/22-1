Sugeneruotas skaicius:
<?php

if(!empty($_GET['page'])){

if ($_GET['page'] == 1) {
    echo rand(1,50);
    echo 'Pirmas';
}
elseif ($_GET['page'] == 2) {
    echo rand(50,100);
    echo 'Antras';
}
elseif ($_GET['page'] == 3) {
    echo rand(101,150);
    echo 'Trecias';
}
}

?>
<br>
<a href="?page=1">Pirmas</a><br>
<a href="?page=2">Antras</a><br>
<a href="?page=3">Trecias</a><br>