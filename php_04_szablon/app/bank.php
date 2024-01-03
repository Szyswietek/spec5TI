<?php
// KONTROLER strony kalkulatora
require_once dirname(__FILE__).'/../config.php';

// W kontrolerze niczego nie wysyła się do klienta.
// Wysłaniem odpowiedzi zajmie się odpowiedni widok.
// Parametry do widoku przekazujemy przez zmienne.
include _ROOT_PATH.'/app/security/check.php';
// 1. pobranie parametrów

function getParams(&$kw,&$proc,&$rok){
	$kw = isset($_REQUEST['kwota']) ? $_REQUEST['kwota'] : null;
	$proc = isset($_REQUEST['procent']) ? $_REQUEST['procent'] : null;
	$rok = isset($_REQUEST['rok']) ? $_REQUEST['rok'] : null;	
}

// 2. walidacja parametrów z przygotowaniem zmiennych dla widoku

// sprawdzenie, czy parametry zostały przekazane
function validate(&$kw,&$proc,&$rok,&$messages){
	if ( ! (isset($kw) && isset($proc) && isset($rok))) {
		//sytuacja wystąpi kiedy np. kontroler zostanie wywołany bezpośrednio - nie z formularza
		
		return false;
	}

	// sprawdzenie, czy potrzebne wartości zostały przekazane
	if ( $kw == "") {
		$messages [] = 'Nie podano kwoty';
	}
	if ( $proc == "") {
		$messages [] = 'Nie podano procentu';
	}
	if ( $rok == "") {
		$messages [] = 'Nie podano okresu czasu';
	}

	if (count ( $messages ) != 0) return false;
	
	// sprawdzenie, czy $x i $y są liczbami całkowitymi
	if (! is_numeric( $kw )) {
		$messages [] = 'Kwota nie jest liczbą całkowitą';
	}
	
	if (! is_numeric( $proc )) {
		$messages [] = 'Procent nie jest liczbą całkowitą';
	}	
	if (! is_numeric( $rok )) {
		$messages [] = 'Rok nie jest liczbą całkowitą';
	}

	if (count ( $messages ) != 0) return false;
	else return true;
}


// 3. wykonaj zadanie jeśli wszystko w porządku

function process(&$kw,&$proc,&$rok,&$messages,&$wynik){
	global $role;
	//konwersja parametrów na int
	$kw = intval($kw);
	$proc = floatval($proc);
	$rok = intval($rok);
	
	//wykonanie operacji
	if($role != "admin" && $kw > 100000){
		$messages[] = "Tylko administrator może obliczyć kredyt powyżej 100000zł";
	}else{
		$op = $proc * $rok * 0.01;
	$reszta = $op * $kw;
	$konc_kwota = $reszta + $kw;
	$miesiace = $rok * 12;
	$wynik = round($konc_kwota/$miesiace);
	}



	
	
}
//definicja zmiennych kontrolera
$kw = null;
$proc = null;
$rok = null;
$wynik = null;
$messages = array();

// 4. Wywołanie widoku z przekazaniem zmiennych

getParams($kw,$proc,$rok);
if ( validate($kw,$proc,$rok,$messages) ) { // gdy brak błędów
	process($kw,$proc,$rok,$messages,$wynik);
}

//Wywołanie widoku, wcześniej ustalenie zawartości zmiennych elementów szablonu

include 'bank_widok.php';