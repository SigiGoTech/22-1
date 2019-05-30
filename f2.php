Sugeneruotas skaicius:
<?php

if(!empty($_POST['page'])){

if ($_POST['page'] == 1) {
    echo rand(1,50);
    echo 'Pirmas';
}
elseif ($_POST['page'] == 2) {
    echo rand(50,100);
    echo 'Antras';
}
elseif ($_POST['page'] == 3) {
    echo rand(101,150);
    echo 'Trecias';
}
}

?>
<br>


<form method="POST" action="">
<button type="submit" name="page" value="1">Pirmas</button>
<button type="submit" name="page" value="2">Antras</button>
<button type="submit" name="page" value="3">Trecias</button>

</form>