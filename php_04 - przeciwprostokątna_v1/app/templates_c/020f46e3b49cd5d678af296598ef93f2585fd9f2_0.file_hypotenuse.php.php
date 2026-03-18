<?php
/* Smarty version 5.4.2, created on 2026-03-11 12:12:54
  from 'file:C:\xampp\htdocs\php_04 - przeciwprostokątna_v1/app/hypotenuse.php' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.2',
  'unifunc' => 'content_69b14e366f8f61_07482010',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '020f46e3b49cd5d678af296598ef93f2585fd9f2' => 
    array (
      0 => 'C:\\xampp\\htdocs\\php_04 - przeciwprostokątna_v1/app/hypotenuse.php',
      1 => 1773227572,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_69b14e366f8f61_07482010 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'C:\\xampp\\htdocs\\php_04 - przeciwprostokątna_v1\\app';
echo '<?php'; ?>

// KONTROLER strony kalkulatora
require_once dirname(__FILE__).'/../config.php';
require_once _ROOT_PATH.'/lib/smarty/libs/Smarty.class.php';

include _ROOT_PATH.'/app/security/check.php';

use Smarty\Smarty;
// 1. Pobranie parametrów
function getParams(&$a, &$b) {
    $a = isset($_REQUEST['a']) ? $_REQUEST['a'] : null;
    $b = isset($_REQUEST['b']) ? $_REQUEST['b'] : null;
}

// 2. Walidacja parametrów
function validate(&$a, &$b, &$messages) {
    if (!(isset($a) && isset($b))) {
        return false;
    }

    if ($a === "") {
        $messages[] = 'Nie podano wartości "a"';
    }
    if ($b === "") {
        $messages[] = 'Nie podano wartości "b"';
    }

    if (count($messages) != 0) return false;

    if (!is_numeric($a)) {
        $messages[] = 'Wartość A nie jest liczbą';
    }
    if (!is_numeric($b)) {
        $messages[] = 'Wartość B nie jest liczbą';
    }
	if ($a < 0) {
        $messages[] = 'Wartość A niemoże być ujemna';
    }
    if ($b < 0) {
        $messages[] = 'Wartość B niemoże być ujemna';
    }
	if ($a == 0) {
        $messages[] = 'Wartość A niemoże być równa 0';
    }
    if ($b == 0) {
        $messages[] = 'Wartość B niemoże być równa 0';
    }

    if (count($messages) != 0) return false;
    return true;
}

// 3. Przetwarzanie
function process(&$a, &$b, &$messages, &$result) {
    global $role;

    if (empty($messages)) {
        $a = floatval($a);
        $b = floatval($b);

        if ($role == 'admin') {
            $result = sqrt(($a * $a) + ($b * $b));
        } else {
            $messages[] = 'Tylko administrator może liczyć!';
        }
    }
}

// 4. Główna logika
$a = null;
$b = null;
$result = null;
$messages = array();

getParams($a, $b);

if (validate($a, $b, $messages)) {
    process($a, $b, $messages, $result);
}
$smarty = new Smarty();

$smarty->assign('app_url',_APP_URL);
$smarty->assign('root_path',_ROOT_PATH);
$smarty->assign('page_title','Przykład 04');
$smarty->assign('page_description','Profesjonalne szablonowanie oparte na bibliotece Smarty');
$smarty->assign('page_header','Szablony Smarty');

//pozostałe zmienne niekoniecznie muszą istnieć, dlatego sprawdzamy aby nie otrzymać ostrzeżenia

$smarty->assign('result',$result);
$smarty->assign('messages',$messages);


// 5. Wywołanie szablonu
$smarty->display(_ROOT_PATH.'/app/hypotenuse.php');

// 5. Wywołanie widoku
include _ROOT_PATH.'/app/hypotenuse_view.php';
<?php }
}
