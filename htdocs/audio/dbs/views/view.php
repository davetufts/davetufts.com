<?
$template->set('title',      'DBS – 486 Mass Ave. Boston, 1994');
$template->set('body_class',  'audio');
$template->place('header');
?>



<article>

	<h1>
		486 Mass Ave, Boston
		<a href="/audio/">More Audio</a>
	</h1>

	<p>
		Freestyles, mix tapes, and other crap my days in Boston. Most of these
		are from 486 Mass Ave in 1994 or '95.
	</p>

	<? Playa::printPlayer($playlist, $_SERVER['DOCUMENT_ROOT'] . $songs) ?>


</article>



<aside>

	<p>
		<img src="./images/1200.gif" alt="1200s" />
	</p>
	<p>
		<a href="https://www.dropbox.com/s/m31jtocn9ku3ig2/1995-DBS-Freestyles.zip?dl=0">Download Show (86MB)</a>
	</p>
	<p>
		<a href="/audio/">More Audio</a>
	</p>

</aside>



<?php
$template->place('footer');
