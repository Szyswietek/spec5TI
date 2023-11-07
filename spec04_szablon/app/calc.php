<?php
// KONTROLER strony kalkulatora
require_once dirname(__FILE__).'/../config.php';

// W kontrolerze niczego nie wysyła się do klienta.
// Wysłaniem odpowiedzi zajmie się odpowiedni widok.
// Parametry do widoku przekazujemy przez zmienne.


//ochrona kontrolera
include _ROOT_PATH.'/app/security/check.php';

// 1. pobranie parametrów
function getParams(&$kwota,&$rata,&$operacja){
	$kwota =isset($_REQUEST['kwota']) ? $_REQUEST['kwota']: null;
	$rata = isset($_REQUEST['rata']) ? $_REQUEST['rata']: null;
	$operacja = isset($_REQUEST['operacja']) ? $_REQUEST['operacja']: null;
}
// 2. walidacja parametrów z przygotowaniem zmiennych dla widoku
function validate(&$kwota,&$rata,&$operacja,&$messages){
	// sprawdzenie, czy parametry zostały przekazane
	if ( ! (isset($kwota) && isset($rata) && isset($operacja))) {
		//sytuacja wystąpi kiedy np. kontroler zostanie wywołany bezpośrednio - nie z formularza
		return false;
	}

	// sprawdzenie, czy potrzebne wartości zostały przekazane
	if ( $kwota == "") {
		$messages [] = 'Nie podano kwoty';
	}
	if ( $rata == "") {
		$messages [] = 'Nie podano liczby liczby rat';
	}
	if ( $operacja == "") {
		$messages [] = 'Nie podano liczby oprocentowania';
	}

	//nie ma sensu walidować dalej gdy brak parametrów
	if (count ( $messages ) != 0) return false;

	// sprawdzenie, czy $x i $y są liczbami całkowitymi
	if (! is_numeric( $kwota )) {
		$messages [] = 'Kwota nie jest liczbą całkowitą';
	}
	
	if (! is_numeric( $rata )) {
		$messages [] = 'Rata wartość nie jest liczbą całkowitą';
	}

	if (! is_numeric( $operacja )) {
		$messages [] = 'Operacja nie jest liczbą całkowitą';
	}		
	
	if (count ( $messages ) != 0) return false;
	else return true;

}

function procces(&$kwota,&$rata,&$operacja,&$messages,&$wynik3){
	global $role;

	//konwersja parametrów na int
	$kwota = intval($kwota);
	$rata = intval($rata);
    $operacja = intval($operacja);



	if( $role == "user" && $kwota>100000 || $operacja>5){
		$messages [] = "Tylko admin może wykonywać takie operacje";
	}else{
		//wykonanie operacji
			$procent=$operacja*0.01;
			$wynik1=$kwota*$procent;
			$wynik2=$kwota+$wynik1;
			$wynik3= $wynik2/$rata;
	}

}
	//definicja zmiennych kontrolera
	$kwota = null;
	$rata = null;
	$operacja = null;
	$wynik3 = null;
	$messages = array();

	//pobierz parametry i wykonaj zadanie jeśli wszystko w porządku
	getParams($kwota,$rata,$operacja);
	if ( validate($kwota,$rata,$operacja,$messages) ) { // gdy brak błędów
		procces($kwota,$rata,$operacja,$messages,$wynik3);
	}


// 4. Wywołanie widoku z przekazaniem zmiennych
// - zainicjowane zmienne ($messages,$x,$y,$operation,$result)
//   będą dostępne w dołączonym skrypcie
include 'calc_view.php';