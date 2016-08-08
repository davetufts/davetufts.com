<?php
include $_SERVER['DOCUMENT_ROOT'] . '/inc/init.php';

$template->set('title', 'Neo-Cerebral Subculture – Cassette');
$template->set('section', 'audio');
$template->place('header');
?>



<div class="row">
	
	<article class="col-md-9">
		<h1>
			Neo-Cerebral Subculture – Cassette
			<a href="/audio/">More Audio</a>
		</h1>
		<p>
			Chip, J, Mike, and Pete's August 1990 recording.
		</p>
		<iframe width="100%" height="450" scrolling="no" frameborder="no" src="https://w.soundcloud.com/player/?url=https%3A//api.soundcloud.com/playlists/248360490&amp;auto_play=false&amp;hide_related=false&amp;show_comments=true&amp;show_user=true&amp;show_reposts=false&amp;visual=true"></iframe>
		<p>
			<a href="https://dl.dropboxusercontent.com/u/6809778/music/1990-Neo-Cerebral-Subculture.zip">Download all songs (17MB)</a>
		</p>
	</article>

	<aside class="col-md-3">
		<p>
			<img src="./images/neo-cerebral-subculture-cassette-front.jpg" alt="Front of the cassette" />
			<img src="./images/neo-cerebral-subculture-cassette-back.jpg" alt="Back of the cassette" />
		</p>
		<p>
			<a href="https://dl.dropboxusercontent.com/u/6809778/music/1990-Neo-Cerebral-Subculture.zip">Download the cassette (17MB)</a>
		</p>
		<p>
			<a href="/audio/">More Audio</a>
		</p>
	</aside>

</div>



<?php
$template->place('footer');
