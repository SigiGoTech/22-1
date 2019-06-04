<?php
    require 'bootstrap.php';
?>
<h2>REgister</h2>

<form action="" method="POST">
  Email:<br>
  <input type="email" name="email">
  <br>
  Pasword:<br>
  <input type="password" name="password">
  <br><br>
  <input type="submit" value="Register">
</form>

<?php
    if (!empty($_POST)) {
        // irasom nauja useri
        addUser($_POST['email'], $_POST['password']);

    }
