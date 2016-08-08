<?php
/* --------------------------------------------------------------------- */
/*
/* DaveTufts.com
/*
/* --------------------------------------------------------------------- */
include $_SERVER['DOCUMENT_ROOT'] . '/inc/init.php';

$template->set('title',       'David Tufts: Captain of Industry');
$template->set('description', 'Dave Tufts is a father, husband, business owner, and coffee drinker. In meta tags he refers to himself in the 3rd-person. This is his personal site.');
$template->set('section',     'home');
$template->place('header');
?>



<!-- Main jumbotron for a primary marketing message or call to action -->
<div class="jumbotron">
	<div class="container">
		<h1>Dave Tufts</h1>
		<p>
			Someday I will make a website here.
		</p>
		<p>
			<a class="btn btn-primary btn-lg" href="mailto:davetufts@gmail.com" role="button">Contact Me.</a>
		</p>
	</div>
</div>



<?php
/* --------------------------------------------------------------------- */
$template->place('footer');
