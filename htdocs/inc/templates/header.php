<!doctype html>
<html class="no-js" lang="">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<title><?php echo $this->get('title') ?></title>

	<?php
	if  ($this->get('description')) {
		?>
		<meta name="description" content="<?php echo $this->get('description'); ?>" />
		<?php
	}
	if  ($this->get('header_content')) {
		echo $this->get('header_content');
	}
	?>

	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="apple-touch-icon" href="apple-touch-icon.png">

	<link rel="stylesheet" href="/css/bootstrap.min.css">
	<style>
		body {
			padding-top: 50px;
			padding-bottom: 20px;
		}
	</style>
	<link rel="stylesheet" href="/css/bootstrap-theme.min.css">
	<link rel="stylesheet" href="/css/main.css">

	<script src="/js/vendor/modernizr-2.8.3.min.js"></script>
</head>
<body>

	<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
		<div class="container">
			<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
				<span class="sr-only">Toggle navigation</span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>

			<div class="navbar-header">
				<a class="navbar-brand" href="/">Dave Tufts</a>
		    </div>
			<div id="navbar" class="navbar-collapse collapse">
				<ul class="nav navbar-nav">
				   <li<?= ($this->get('section') == "audio") ? ' class="active"' : ''; ?>>
					   <a href="/audio/">Audio</a>
				   </li>
				   <li<?= ($this->get('section') == "space") ? ' class="active"' : ''; ?>>
					   <a href="/space/">Space</a>
				   </li>
				   <li<?= ($this->get('section') == "graffiti") ? ' class="active"' : ''; ?>>
					   <a href="/graffiti/">Graffiti</a>
				   </li>
			   </ul>
			</div>
		</div>
	</nav>

	<div class="container">
