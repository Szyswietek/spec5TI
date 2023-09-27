<?php require_once dirname(__FILE__) .'/../config.php';?>
<!DOCTYPE HTML>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="pl" lang="pl">
<head>
<meta charset="utf-8" />
<title>Kalkulator</title>
</head>
<body>

<form action="<?php print(_APP_URL);?>/app/calc.php" method="post">
<label>Kwota:</label>  
	<input id="kwota" type="number" name="kwota" value="<?php isset($kwota)?print($kwota):""; ?>"/><br/>
	<label>Liczba rat:</label> 
	<input type = "number" id = "rata" name = "rata" value = "<?php isset($rata)?print($rata):""; ?>"/><br/>
	<label>Oprocentowanie:</label> 
	<input type = "number" id = "op" name="operacja" value="<?php isset($op)?print($op):""; ?>"/>%<br/>
	<br />
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

<?php if (isset($wynik3)){ ?>
<div style="margin: 20px; padding: 10px; border-radius: 5px; background-color: #ff0; width:300px;">
<?php echo 'Wynik: ' . round($wynik3); ?>
</div>
<?php } ?>

</body>
</html>