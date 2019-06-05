<h3>Testas 1 kategorijos miško šaltkavio kategorijai gauti<h3>
<form action="result.php" method="POST">
<?php




foreach(getQuestions() as $val)
{
    $klausimas = $val['q'];
    $teisingi = $val['correct'];
    $id = $val['id'];
    $atsakymai = [];
    foreach ($val as $key=>$val1) {
        if (preg_match('/^a\d+$/', $key)) {
            $atsakymai[$key] = $val1;
        }
    }



    ?>
    <p><?= $klausimas ?></p>
    <?php
    if(!empty($atsakymai)) {
        if(count($atsakymai)>4) {
            ?>
            <select name="q_<?= $id ?>[]">
            <?php
            foreach ($atsakymai as $key2 => $val2) {
            ?>

            <option value="<?= $key2 ?>"><?= $val2 ?></option>

            <?php
            }
            ?>
            </select>
            <?php
        }
        else {
            foreach ($atsakymai as $key2 => $val2) {
            ?>

            <input type="checkbox" name="q_<?= $id ?>[]" value="<?= $key2 ?>"><label><?= $val2 ?></label>

            <?php
            }
        }
    }
    else {
        ?>
        <input type="text" name="q_<?= $id ?>[]">
        <?php
    }
}

?>
<br><br>
<button type="submit">Pateikti</button>
</form>

<?php

















function getQuestions()
{
    return json_decode(file_get_contents('klausimai.json'), JSON_OBJECT_AS_ARRAY);// nuskaitom json
}