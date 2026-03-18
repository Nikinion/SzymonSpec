<!DOCTYPE HTML>
<html lang="pl">
<head>
    <meta charset="utf-8" />
    <title>Hypotenuse</title>
    <link rel="stylesheet" href="http://yui.yahooapis.com/pure/0.6.0/pure-min.css">
</head>
<body>

<div style="width:90%; margin: 2em auto;">
    <a href="<?php print(_APP_ROOT); ?>/app/inna_chroniona.php" class="pure-button">Kolejna chroniona strona</a>
    <a href="<?php print(_APP_ROOT); ?>/app/security/logout.php" class="pure-button pure-button-active">Wyloguj</a>
</div>

<div style="width:90%; margin: 2em auto;">

<form action="<?php print(_APP_ROOT); ?>/app/hypotenuse.php" method="post" class="pure-form pure-form-stacked">
    <legend>Przeciwprostokątna</legend>
    <fieldset>
        <label for="id_a">Podaj a:</label>
        <input id="id_a" type="text" name="a" value="<?php if (isset($a)) echo htmlspecialchars($a); ?>" />

        <label for="id_b">Podaj b:</label>
        <input id="id_b" type="text" name="b" value="<?php if (isset($b)) echo htmlspecialchars($b); ?>" />
    </fieldset>
    <input type="submit" value="Oblicz" class="pure-button pure-button-primary" />
</form>

<?php
// Wyświetlenie listy błędów
if (!empty($messages)) {
    echo '<ol style="margin-top: 1em; padding: 1em 1em 1em 2em; border-radius: 0.5em; background-color: #f88; width:25em;">';
    foreach ($messages as $msg) {
        echo '<li>'.htmlspecialchars($msg).'</li>';
    }
    echo '</ol>';
}
?>

<?php if (isset($result)) { ?>
    <div style="margin-top: 1em; padding: 1em; border-radius: 0.5em; background-color: #ff0; width:25em;">
        <?php echo 'Wynik: '.htmlspecialchars($result); ?>
    </div>
<?php } ?>

</div>

</body>
</html>
