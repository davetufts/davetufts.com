<?php
include $_SERVER['DOCUMENT_ROOT'] . '/inc/init.php';

$template->set('title', 'Friends of Ed: Eye of the Tiger');
$template->set('section', 'audio');
$template->place('header');
?>


<div class="row">

	<article class="col-md-9">
		<h1>
			Friends of Ed – Eye of the Tiger
			<a href="/audio/">More Audio</a>
		</h1>
		<p>
			<strong>From the liner notes:</strong> This is just a cheesy demo that
			we four tracked in November–December, 1990. Most of it is a joke.
		</p>
		<iframe width="100%" height="450" scrolling="no" frameborder="no" src="https://w.soundcloud.com/player/?url=https%3A//api.soundcloud.com/playlists/248152271&amp;auto_play=false&amp;hide_related=false&amp;show_comments=true&amp;show_user=true&amp;show_reposts=false&amp;visual=true"></iframe>
		<p>
			Eye of the Tiger written by Survivor<br />
			The Hardway written by Outburst<br />
			Salad Days written by Minor Threat<br />
			Burning Too written by Fugazi<br />
			Ed’s Not Home by Adrenelin O.D.
		</p>
		<p>
			For this recording, Friends of Ed was Mike Allen, J Cole, Pete DeGraaf,
			Mike Mello and Dave Tufts.
		</p>
	</article>

	<aside class="col-md-3">
		<p>
			<img src="./images/friends-of-ed-eye_of_the_tiger.jpg" alt="Eye of the Tiger" />
		</p>
		<p>
			<a href="https://www.dropbox.com/s/jz28k1ht3ah2z5d/1990-FOE-Eye_Of_The_Tiger.zip?dl=0">Download Cassette (34MB)</a>
		</p>
		<p>
			<a href="/audio/">More Audio</a>
		</p>
	</aside>

</div>



<?php
$template->place('footer');
