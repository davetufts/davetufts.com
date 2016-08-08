<?php
include $_SERVER['DOCUMENT_ROOT'] . '/inc/init.php';

$template->set('title', 'Friends of Ed: Live at W.A.G., Summer 1992');
$template->set('section', 'audio');
$template->place('header');
?>



<div class="row">

	<article class="col-md-9">
		<h1>
			Friends of Ed – Live at W.A.G., Summer 1992
			<a href="/audio/">More Audio</a>
		</h1>
		<p>
			Recorded live at Worcester Artist Group, summer 1992. This might have
			been the last FOE show at W.A.G.
		</p>
		<iframe width="100%" height="450" scrolling="no" frameborder="no" src="https://w.soundcloud.com/player/?url=https%3A//api.soundcloud.com/playlists/248157445&amp;auto_play=false&amp;hide_related=false&amp;show_comments=true&amp;show_user=true&amp;show_reposts=false&amp;visual=true"></iframe>
		<p>
			For this recording, Friends of Ed was Mike Allen, J Cole, Mike Mello,
			Dave Tufts, and some other bass player.
		</p>
	</article>

	<aside class="col-md-3">
		<p>
			<img src="./images/friends-of-ed-ct_produce.jpg" alt="FOE and W.A.G." />
		</p>
		<p>
			<a href="http://dl.dropbox.com/u/6809778/music/1992-FOE-Worcester_Artist_Group.zip">Download Show (43MB)</a>
		</p>
		<p>
			<a href="/audio/">More Audio</a>
		</p>
	</aside>

</div>



<?php
$template->place('footer');
