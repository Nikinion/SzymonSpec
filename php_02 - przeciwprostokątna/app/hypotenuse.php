<?php
// KONTROLER strony kalkulatora
require_once dirname(__FILE__).'/../config.php';
include _ROOT_PATH.'/app/security/check.php';

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

// 5. Wywołanie widoku
include _ROOT_PATH.'/app/hypotenuse_view.php';
