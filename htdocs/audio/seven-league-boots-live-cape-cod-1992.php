<?php
include $_SERVER['DOCUMENT_ROOT'] . '/inc/init.php';

$template->set('title', 'Seven League Boots – Live in West Dennis, Cape Cod, 1992');
$template->set('section', 'audio');
$template->place('header');
?>



<div class="row">
	
	<article class="col-md-9">
		<h1>
			Seven League Boots – Live, 1992
			<a href="/audio/">More Audio</a>
		</h1>
		<p>
			Live at the West Dennis Community Hall on Cape Cod. Seven League
			Boots opened for Green Day.
		</p>
		<iframe width="100%" height="450" scrolling="no" frameborder="no" src="https://w.soundcloud.com/player/?url=https%3A//api.soundcloud.com/playlists/248376610&amp;auto_play=false&amp;hide_related=false&amp;show_comments=true&amp;show_user=true&amp;show_reposts=false&amp;visual=true"></iframe>
	</article>

	<aside class="col-md-3">
		<p>
			<img src="./images/seven-league-boots-west_dennis" alt="Flyer for the Show" />
		</p>
		<p>
			<a href="https://www.dropbox.com/s/3xrc8mkip45a9we/1992-Seven_League_Boots-Cape_Cod.zip?dl=0">Download Show (38MB)</a>
		</p>
		<p>
			<a href="/audio/">More Audio</a>
		</p>
	</aside>

</div>



<?php
$template->place('footer');
