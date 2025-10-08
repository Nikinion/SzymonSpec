<?php
// KONTROLER strony kalkulatora
require_once dirname(__FILE__).'/../config.php';

// W kontrolerze niczego nie wysyła się do klienta.
// Wysłaniem odpowiedzi zajmie się odpowiedni widok.
// Parametry do widoku przekazujemy przez zmienne.
include _ROOT_PATH.'/app/security/check.php';
// 1. pobranie parametrów

function getParams(&$x,&$y){
	$x = isset($_REQUEST['x']) ? $_REQUEST['x'] : null;
	$y = isset($_REQUEST['y']) ? $_REQUEST['y'] : null;
}

//walidacja parametrów z przygotowaniem zmiennych dla widoku
function validate(&$x,&$y,&$messages){
	// sprawdzenie, czy parametry zostały przekazane
	if ( ! (isset($x) && isset($y))) {
		// sytuacja wystąpi kiedy np. kontroler zostanie wywołany bezpośrednio - nie z formularza
		// teraz zakładamy, ze nie jest to błąd. Po prostu nie wykonamy obliczeń
		return false;
	}

	// sprawdzenie, czy potrzebne wartości zostały przekazane
	if ( $x == "") {
		$messages [] = 'Nie podano wartości "a"';
	}
	if ( $y == "") {
		$messages [] = 'Nie podano wartości "b"';
	}

	//nie ma sensu walidować dalej gdy brak parametrów
	if (count ( $messages ) != 0) return false;
	
	// sprawdzenie, czy $x i $y są liczbami całkowitymi
	if (! is_numeric( $x )) {
		$messages [] = 'Pierwsza wartość nie jest liczbą całkowitą';
	}
	
	if (! is_numeric( $y )) {
		$messages [] = 'Druga wartość nie jest liczbą całkowitą';
	}	

	if (count ( $messages ) != 0) return false;
	else return true;
}


// 3. wykonaj zadanie jeśli wszystko w porządku
function process(&$x,&$y,&$messages,&$result){
global $role;
if (empty ( $messages )) { // gdy brak błędów
	
	//konwersja parametrów na int
	$x = floatval($x);
	$y = floatval($y);
	
	//wykonanie operacji
	if($role == 'admin'){
		$result = sqrt(($x*$x)+($y*$y));
		}else $messages [] = 'Tylko administrator może dzielić !';
	}
}
$x = null;
$y = null;
$result = null;
$messages = array();

getParams($x,$y);
if ( validate($x,$y,$messages) ) { // gdy brak błędów
	process($x,$y,$messages,$result);
}
// 4. Wywołanie widoku z przekazaniem zmiennych
// - zainicjowane zmienne ($messages,$x,$y,$operation,$result)
//   będą dostępne w dołączonym skrypcie
include 'hypotenuse_view.php';