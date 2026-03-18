<?php
/* Smarty version 5.4.2, created on 2026-03-11 12:11:52
  from 'file:C:\xampp\htdocs\php_04 - przeciwprostokątna_v1/app/hypotenuse_view.php' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.2',
  'unifunc' => 'content_69b14df83cdb79_78015271',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '98f12a093ec18bb8abef6821109baff8783b8c46' => 
    array (
      0 => 'C:\\xampp\\htdocs\\php_04 - przeciwprostokątna_v1/app/hypotenuse_view.php',
      1 => 1761738024,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_69b14df83cdb79_78015271 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'C:\\xampp\\htdocs\\php_04 - przeciwprostokątna_v1\\app';
?><!DOCTYPE HTML>
<html lang="pl">
<head>
    <meta charset="utf-8" />
    <title>Hypotenuse</title>
    <link rel="stylesheet" href="http://yui.yahooapis.com/pure/0.6.0/pure-min.css">
</head>
<body>

<div style="width:90%; margin: 2em auto;">
    <a href="<?php echo '<?php'; ?>
 print(_APP_ROOT); <?php echo '?>'; ?>
/app/inna_chroniona.php" class="pure-button">Kolejna chroniona strona</a>
    <a href="<?php echo '<?php'; ?>
 print(_APP_ROOT); <?php echo '?>'; ?>
/app/security/logout.php" class="pure-button pure-button-active">Wyloguj</a>
</div>

<div style="width:90%; margin: 2em auto;">

<form action="<?php echo '<?php'; ?>
 print(_APP_ROOT); <?php echo '?>'; ?>
/app/hypotenuse.php" method="post" class="pure-form pure-form-stacked">
    <legend>Przeciwprostokątna</legend>
    <fieldset>
        <label for="id_a">Podaj a:</label>
        <input id="id_a" type="text" name="a" value="<?php echo '<?php'; ?>
 if (isset($a)) echo htmlspecialchars($a); <?php echo '?>'; ?>
" />

        <label for="id_b">Podaj b:</label>
        <input id="id_b" type="text" name="b" value="<?php echo '<?php'; ?>
 if (isset($b)) echo htmlspecialchars($b); <?php echo '?>'; ?>
" />
    </fieldset>
    <input type="submit" value="Oblicz" class="pure-button pure-button-primary" />
</form>

<?php echo '<?php'; ?>

// Wyświetlenie listy błędów
if (!empty($messages)) {
    echo '<ol style="margin-top: 1em; padding: 1em 1em 1em 2em; border-radius: 0.5em; background-color: #f88; width:25em;">';
    foreach ($messages as $msg) {
        echo '<li>'.htmlspecialchars($msg).'</li>';
    }
    echo '</ol>';
}
<?php echo '?>'; ?>


<?php echo '<?php'; ?>
 if (isset($result)) { <?php echo '?>'; ?>

    <div style="margin-top: 1em; padding: 1em; border-radius: 0.5em; background-color: #ff0; width:25em;">
        <?php echo '<?php'; ?>
 echo 'Wynik: '.htmlspecialchars($result); <?php echo '?>'; ?>

    </div>
<?php echo '<?php'; ?>
 } <?php echo '?>'; ?>


</div>

</body>
</html>
<?php }
}
