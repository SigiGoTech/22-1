<?php
    require 'bootstrap.php';
?>
<h2>LOgin</h2>

<form action="" method="POST">
  Email:<br>
  <input type="email" name="email">
  <br>
  Pasword:<br>
  <input type="password" name="password">
  <br><br>
  <input type="submit" value="Login">
</form>

<?php
   


    if (!empty($_POST)) {
        // irasom nauja useri
        $action = loginUser($_POST['email'], $_POST['password']); // arba prijungti arba ne
        if ($action === false) {
            echo "ERROR";
        }
        if ($action === true) {// prijungiame useri
            $_SESSION['login'] = 1;
            $_SESSION['time'] = time();
            header('Location: '.$url.'index.php');
            die();
        }
    }

    if (!empty($_GET)) {
        if ($_GET['logout'] == 'yes') {
            //atloginam useri
            $_SESSION['login'] = 0;
            echo "LOGout";
        }
    }