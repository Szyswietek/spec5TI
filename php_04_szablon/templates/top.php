<!doctype html>
<html lang="pl">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="<?php out($page_description); if (!isset($page_description)) {  ?> Fajny bank <?php } ?>">
	<title><?php out($page_title); if (empty($page_title)) {  ?> Bank Młodzieżowy <?php } ?></title>
	<link rel="stylesheet" href="https://unpkg.com/purecss@0.6.2/build/pure-min.css" integrity="sha384-UQiGfs9ICog+LwheBSRCt1o5cbyKIHbwjWscjemyBMT9YCUMZffs6UqUTd0hObXD" crossorigin="anonymous">
	<link rel="stylesheet" href="<?php print(_APP_URL); ?>/css/main.css">	
</head>
<body>

<div class="header">
	<h1><?php out($page_title); if (!isset($page_title)) {  ?> Bank Młodzieżowy  <?php } ?></h1>
	<h2><?php out($page_header); if (!isset($page_header)) {  ?> Witamy <?php } ?></h1>
	<p>
		<?php out($page_description); if (!isset($page_description)) {  ?> Jesteś na stronie naszego banku<br> <?php } ?>
	</p>
</div>

<div class="content">