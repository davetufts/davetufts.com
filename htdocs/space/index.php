<?php
include $_SERVER['DOCUMENT_ROOT'] . '/inc/init.php';

$template->set('title', 'One space is better than two – Dave Tufts');
$template->set('section', 'space');
$template->place('header');
?>


<h1>single space</h1>

<blockquote>

	<p>
		In the nineteenth century, which was a dark and inflationary age in
		typography and type design, many compositors were encouraged to stuff
		extra space between sentences.
	</p>

	<p>
		Generations of twentieth century typists were then taught to do the
		same, by hitting the spacebar twice after every period [full stop].
		Your typing as well as your typesetting will benefit from unlearning
		this quaint Victorian habit. <strong>As a general rule, no more than
		a single space is required after a period, colon or any other mark of
		punctuation.</strong>
	</p>

	<p>
		<em>—Robert Slimbach</em>
	</p>

</blockquote>




<?php
/* --------------------------------------------------------------------- */
$template->place('footer');
