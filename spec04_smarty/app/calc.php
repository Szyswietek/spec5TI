<?php
// KONTROLER strony kalkulatora
require_once dirname(__FILE__).'/../config.php';
require_once _ROOT_PATH.'/lib/smarty/Smarty.class.php';
// W kontrolerze niczego nie wysyła się do klienta.
// Wysłaniem odpowiedzi zajmie się odpowiedni widok.
// Parametry do widoku przekazujemy przez zmienne.


//ochrona kontrolera


// 1. pobranie parametrów
function getParams(&$form){
	$kwota =isset($_REQUEST['kwota']) ? $_REQUEST['kwota']: null;
	$rata = isset($_REQUEST['rata']) ? $_REQUEST['rata']: null;
	$operacja = isset($_REQUEST['operacja']) ? $_REQUEST['operacja']: null;
}
// 2. walidacja parametrów z przygotowaniem zmiennych dla widoku
function validate(&$form,&$infos,&$msgs,&$hide_intro){
	// sprawdzenie, czy parametry zostały przekazane
	if ( ! (isset($form['kwota']) && isset($form['rata']) && isset($form['operacja']))) {
		//sytuacja wystąpi kiedy np. kontroler zostanie wywołany bezpośrednio - nie z formularza
		return false;
	}
	$hide_intro = true;
	$infos [] = 'Przekazano parametry.';
	// sprawdzenie, czy potrzebne wartości zostały przekazane
	if ( $form['kwota'] == "") {
		$msgs [] = 'Nie podano kwoty';
	}
	if ( $form['rata'] == "") {
		$msgs [] = 'Nie podano liczby liczby rat';
	}
	if ( $form['operacja'] == "") {
		$msgs [] = 'Nie podano liczby oprocentowania';
	}

	//nie ma sensu walidować dalej gdy brak parametrów
	if (count ( $msgs ) != 0) return false;

	// sprawdzenie, czy $x i $y są liczbami całkowitymi
	if (! is_numeric( $form['kwota'] )) {
		$msgs [] = 'Kwota nie jest liczbą całkowitą';
	}
	
	if (! is_numeric( $form['rata'] )) {
		$msgs [] = 'Rata wartość nie jest liczbą całkowitą';
	}

	if (! is_numeric( $form['operacja'] )) {
		$msgs [] = 'Operacja nie jest liczbą całkowitą';
	}		
	
	if (count($msgs)>0) return false;
	else return true;
}

function procces(&$form,&$infos,&$msgs,&$result){

	$infos [] = 'Parametry poprawne. Wykonuję obliczenia.';
	//konwersja parametrów na int
	$form['kwota'] = intval($form['kwota']);
	$form['rata'] = intval($form['rata']);
    $form['operacja'] = intval($form['operacja']);



	
		//wykonanie operacji
			$procent=$form['operacja']*0.01;
			$wynik1=$kwota*$procent;
			$wynik2=$kwota+$wynik1;
			$result= $wynik2/$rata;
	

}
	//definicja zmiennych kontrolera
	$form = null;
	$infos = array();
	$result = null;
	$messages = array();

	//pobierz parametry i wykonaj zadanie jeśli wszystko w porządku
	getParams($form);
	if ( validate($form,$messages,$infos,$hide_intro) ) { // gdy brak błędów
		procces($form,$infos,$messages,$result);
	}
	
	$smarty = new Smarty();


	$smarty->assign('app_url',_APP_URL);
	$smarty->assign('root_path',_ROOT_PATH);
	$smarty->assign('page_title','Przykład 04');
	$smarty->assign('page_description','Profesjonalne szablonowanie oparte na bibliotece Smarty');
	$smarty->assign('page_header','Szablony Smarty');

	$smarty->assign('form',$form);
	$smarty->assign('result',$result);
	$smarty->assign('messages',$messages);
	$smarty->assign('infos',$infos);

//wywołanie szablonu
$smarty->display(_ROOT_PATH.'/app/calc_SMART_view.html');