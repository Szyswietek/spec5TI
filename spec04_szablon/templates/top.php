<!doctype html>
<html lang="pl">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="<?php out($page_description); if (!isset($page_description)) {  ?> Opis domyślny ... <?php } ?>">
	<title><?php out($page_title); if (empty($page_title)) {  ?> Bank <?php } ?></title>
	
	<link rel="stylesheet" href="<?php print(_APP_URL); ?>/css/main2.css">	
</head>
<body>

<div class="header">
	<h1><?php out($page_title); if (!isset($page_title)) {  ?> Amber <?php } ?></h1>
	<h2><?php out($page_header); if (!isset($page_header)) {  ?> Gold <?php } ?></h1>
	<p>
		<?php out($page_description); if (!isset($page_description)) {  ?> Bank bardzo dobry <?php } ?>
	</p>
</div>

<div class="content">