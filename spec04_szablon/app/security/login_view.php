<?php
include _ROOT_PATH.'/templates/top.php';
?>

<div style="width:90%; margin: 2em auto;">

<form action="<?php print(_APP_ROOT); ?>/app/security/login.php" method="post" class="pure-form_pure-form-stacked">
	<legend>Logowanie</legend>
	<fieldset>
		<label style="color:white;" for="id_login">login: </label>
		<input id="id_login" type="text" name="login" value="<?php out($form['login']); ?>" />
		<label style="color:white;" for="id_pass">pass: </label>
		<input style="color:white;" id="id_pass" type="password" name="pass" />
	</fieldset>
	<br>
	<input  type="submit" value="zaloguj" class="pure-button pure-button-primary"/>
</form>	

<?php
//wyświeltenie listy błędów, jeśli istnieją
if (isset($messages)) {
	if (count ( $messages ) > 0) {
		echo '<ol style="padding: 10px 10px 10px 30px; border-radius: 5px; background-color: #f88; width:300px;">';
		foreach ( $messages as $key => $msg ) {
			echo '<li>'.$msg.'</li>';
		}
		echo '</ol>';
	}
}
?>

</div>
<?php
include _ROOT_PATH.'/templates/bottom.php';
?>
</body>
</html>