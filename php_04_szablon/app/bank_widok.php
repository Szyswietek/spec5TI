<?php //góra strony z szablonu 
include _ROOT_PATH.'/templates/top.php';
?>
<body>

<div style="width:90%; margin: 2em auto;">
	<a href="<?php print(_APP_ROOT); ?>/app/inna_chroniona.php" class="pure-button">kolejna chroniona strona</a>
	<a href="<?php print(_APP_ROOT); ?>/app/security/logout.php" class="pure-button pure-button-active">Wyloguj</a>
</div>

<form action="<?php print(_APP_URL);?>/app/bank.php" method="post">

	<label for="kwota">Podaj kwote kredytu: </label>
	<input id="kwota" type="number" name="kwota" value="<?php isset($kw) ?print($kw) :""; ?>" /><br />

	<label for="proc">Podaj procent(%): </label>
	<input id="procent" type="tekst" name="procent" value="<?php isset($proc) ?print($proc) : ""; ?> " /><br/>

	<label for="rok">Podaj na ile lat bierzesz kredyt: </label>
	<input id="rok" type="number" name="rok" value="<?php isset($rok)?print($rok) : ""; ?>" /><br />

	<input type="submit" value="Oblicz" />
</form>	

<?php
//wyświeltenie listy błędów, jeśli istnieją
if (isset($messages)) {
	if (count ( $messages ) > 0) {
		echo '<ol style="margin: 20px; padding: 10px 10px 10px 30px; border-radius: 5px; background-color: #f88; width:300px;">';
		foreach ( $messages as $key => $msg ) {
			echo '<li>'.$msg.'</li>';
		}
		echo '</ol>';
	}
}
?>

<?php if (isset($wynik)){ ?>
<div style="margin: 20px; padding: 10px; border-radius: 5px; background-color: #1cb495; width:300px;">
<?php echo 'Wynik: '.$wynik; ?>
</div>
<?php } ?>


<?php //dół strony z szablonu 
include _ROOT_PATH.'/templates/bottom.php';
?>
