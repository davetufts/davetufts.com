<?php
include $_SERVER['DOCUMENT_ROOT'] . '/inc/init.php';

$template->set('title', 'Friends of Ed: Berklee Studio B');
$template->set('section', 'audio');
$template->place('header');
?>


<div class="row">

	<article class="col-md-9">
		<h1>
			Friends of Ed – Berklee Studio B
			<a href="/audio/">More Audio</a>
		</h1>
		<p>
			Recorded in 1993 or 94 at Studio B, Berklee College of Music. I believe
			we recorded these songs between midnight and 4am one night for a
			sound engineering school project.
		</p>
		<iframe width="100%" height="450" scrolling="no" frameborder="no" src="https://w.soundcloud.com/player/?url=https%3A//api.soundcloud.com/playlists/248172338&amp;auto_play=false&amp;hide_related=false&amp;show_comments=true&amp;show_user=true&amp;show_reposts=false&amp;visual=true"></iframe>
		<p>
			For this recording, Friends of Ed was Mike Allen, J Cole,
			Brendan Gormley, and Dave Tufts.
		</p>
	</article>

	<aside class="col-md-3">
		<p>
			<img src="./images/friends-of-ed-berklee-studio_b.jpg" alt="Berklee Studio B" />
		</p>
		<p>
			<a href="https://www.dropbox.com/s/7ucs0xdsxc6b2sg/1994-Friend_Of_Ed-Berklee.zip?dl=0">Download Show (21MB)</a>
		</p>
		<p>
			<a href="/audio/">More Audio</a>
		</p>
	</aside>

</div>



<?php
$template->place('footer');
