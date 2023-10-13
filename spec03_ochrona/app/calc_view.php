<?php require_once dirname(__FILE__) .'/../config.php';?>
<!DOCTYPE HTML>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="pl" lang="pl">
<head>
<meta charset="utf-8" />
<title>Kalkulator</title>
<link rel="stylesheet" href="<?php print(_APP_URL);?>/app/main2.css">
</head>
<body>

<div style="width:90%; margin: 2em auto; ">
	<a style="color:white; text-transform: uppercase;" href="<?php print(_APP_ROOT); ?>/app/inna_chroniona.php" class="pure-button">kolejna chroniona strona</a><br><br><br>
	<a style="color:black; background-color: grey;   text-transform: uppercase;" href="<?php print(_APP_ROOT); ?>/app/security/logout.php" class="pure-button pure-button-active">Wyloguj</a>
</div>

<div style="width:90%; margin: 2em auto;">

<form action="<?php print(_APP_URL);?>/app/calc.php" method="post">
<label style="color: white;">Kwota:</label>  
	<input id="kwota" type="number" name="kwota" value="<?php isset($kwota)?print($kwota):""; ?>"/><br/>
	<label style="color: white;">Liczba rat:</label> 
	<input type = "number" id = "rata" name = "rata" value = "<?php isset($rata)?print($rata):""; ?>"/><br/>
	<label style="color: white;">Oprocentowanie:</label> 
	<input type = "number" id = "op" name="operacja" value="<?php isset($op)?print($op):""; ?>"/>%<br/>
	<br />
	
	<input style = "background-color:black;" type="submit" value="Oblicz" />
	
</form>	

<?php
//wyświeltenie listy błędów, jeśli istnieją
if (isset($messages)) {
	if (count ( $messages ) > 0) {
		echo '<ol text-align:center; padding: 10px 10px 10px 30px; border-radius: 5px; background-color: #f88; width:300px;">';
		foreach ( $messages as $key => $msg ) {
			echo '<li>'.$msg.'</li>';
		}
		echo '</ol>';
	}
}
?>

<?php if (isset($wynik3)){ ?>
<div style="text-align:center; padding: 10px; border-radius: 5px; background-color: black; width:300px;">
<?php echo 'Jedna rata bedzie kosztowac: ' . round($wynik3); ?>
</div>
<?php } ?>

</body>
</html>