<?php


// echo $_GET['kintamasis'];
// echo '<br>';
// echo $_GET['kitas'];
// echo '<br>';

// if(!empty($_POST)) {
//     echo '<br>';
//     var_dump($_POST['kostas']);
//     echo '<br>';
//     echo $_POST['jonas'];
// }
// else {
//     echo 'niekas mygtuko nepaspaude';
// }

// echo file_get_contents('php://input');


?>

<form method="POST" action="">

X:<input type="text" name="x"><br>
Y: <input type="text" name="y"><br>

<button type="submit">Sumuoti</button>

</form>
<?php
if(!empty($_POST)) {
    echo '<br>';
    
    echo (int)$_POST['x'] + (int)$_POST['y'];
}
