<?php
require_once dirname(__FILE__).'/../config.php';
//ochrona widoku
include _ROOT_PATH.'/app/security/check.php';
?>
<!DOCTYPE HTML>

<head>
	<meta charset="utf-8" />
	<title>Chroniona strona</title>
	<link rel="stylesheet" href="<?php print(_APP_URL);?>/app/main.css">
</head>
<body>

<div style="width:90%; margin: 2em auto;">
	<a href="<?php print(_APP_ROOT); ?>/app/bank.php" class="pure-button">Powrót do kalkulatora kredytowego</a>
	<a href="<?php print(_APP_ROOT); ?>/app/security/logout.php" class="pure-button pure-button-active">Wyloguj</a>
</div>

<div style="width:90%; margin: 2em auto;">
	<p>Strona chroniona</p>
</div>	

</body>
</html>