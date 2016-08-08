<?php
include $_SERVER['DOCUMENT_ROOT'] . '/inc/init.php';

$template->set('title', 'Friends of Ed: Live in West Dennis, Cape Cod');
$template->set('section', 'audio');
$template->place('header');
?>



<div class="row">

	<article class="col-md-9">
		<h1>
			Friends of Ed – Live: West Dennis, Cape Cod, 1992
			<a href="/audio/">More Audio</a>
		</h1>
		<p>
			Opening for <a href="http://www.davetufts.com/audio/sevenleagueboots">Seven League Boots</a>
			and Green Day at the West Dennis Community Hall in Cape Cod. May 30, 1992.
		</p>
		<iframe width="100%" height="450" scrolling="no" frameborder="no" src="https://w.soundcloud.com/player/?url=https%3A//api.soundcloud.com/playlists/248162230&amp;auto_play=false&amp;hide_related=false&amp;show_comments=true&amp;show_user=true&amp;show_reposts=false&amp;visual=true"></iframe>
		<p>
			For this recording, Friends of Ed was Mike Allen, J Cole, Pete DeGraaf,
			Mike Mello and Dave Tufts.
		</p>
	</article>

	<aside class="col-md-3">
		<p>
			<img src="./images/friends-of-ed-west_dennis.jpg" alt="West Dennis Community Hall" />
		</p>
		<p>
			<a href="http://dl.dropbox.com/u/6809778/music/1992-Friends_Of_Ed-Cape_Cod.zip">Download Show (40MB)</a>
		</p>
		<p>
			<a href="/audio/">More Audio</a>
		</p>
	</aside>

</div>



<?php
$template->place('footer');
