<!DOCTYPE html>
<html lang="ko-kr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?=$title?></title>  
	<link href="//netdna.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet">
	<?php
		foreach ($css as $css_value){
			echo "<link href='/CSS/{$css_value}.css' rel='stylesheet' type='text/css' media='all' />\n";	 
		}
	?>	
	<script src="//code.jquery.com/jquery-2.2.4.min.js"></script>
	<script src="//netdna.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
	<script src="https://www.google.com/recaptcha/api.js?render=6Lc2QsIZAAAAAKcXEzdJuLd6zfmFVPR3FhSvBJtl"></script>
	<?php 
		foreach ($javascript as $javascript_value){
			echo "<script type='text/javascript' src='/JS/{$javascript_value}.js'></script>\n";
		}
	?>
</head>
<body>