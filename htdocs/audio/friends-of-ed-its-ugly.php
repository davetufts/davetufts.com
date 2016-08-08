<?php
include $_SERVER['DOCUMENT_ROOT'] . '/inc/init.php';

$template->set('title', 'Friends of Ed: It’s Ugly');
$template->set('section', 'audio');
$template->place('header');
?>



<div class="row">

	<article class="col-md-9">
		<h1>
			Friends of Ed – It’s Ugly
			<a href="/audio/">More Audio</a>
		</h1>
		<h3>Seven Song Cassette EP</h3>
		<p>
			Recorded and mixed at Mendon Rd. Recording in Uxbridge, Ma, May 1991.
			All songs written by FOE except Judgmental (Chip Higgins &amp; FOE) and
			Watercolors (Words by Richard A Boucher).
		</p>
		<iframe width="100%" height="450" scrolling="no" frameborder="no" src="https://w.soundcloud.com/player/?url=https%3A//api.soundcloud.com/playlists/248154541&amp;auto_play=false&amp;hide_related=false&amp;show_comments=true&amp;show_user=true&amp;show_reposts=false&amp;visual=true"></iframe>
		<p>
			For this recording, Friends of Ed was Mike Allen, J Cole, Pete DeGraaf,
			Mike Mello and Dave Tufts.
		</p>
	</article>

	<aside class="col-md-3">
		<p>
			<img src="./images/friends-of-ed-its_ugly_cassette.jpg" alt="It's Ugly Cassette" />
		</p>
		<p>
			<a href="http://dl.dropbox.com/u/6809778/music/1991-FOE-its_ugly.zip">Download Show (19MB)</a>
		</p>
		<p>
			<a href="/audio/">More Audio</a>
		</p>
	</aside>

</div>



<?php
$template->place('footer');
