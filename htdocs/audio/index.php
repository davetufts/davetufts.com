<?php
include $_SERVER['DOCUMENT_ROOT'] . '/inc/init.php';

$template->set('title', 'Audio Archive: Live shows, old demos, archived cassettes – David Tufts');
$template->set('section', 'audio');
$template->place('header');
?>


<h1>Audio Archives</h1>

<div class="audio-gallery">

	<h2>Friends of Ed (F.O.E.)</h2>

	<div class="row">

		<div class="col-md-2">
			<a href="./friends-of-ed-eye-of-the-tiger">
				<img src="./images/friends-of-ed-eye_of_the_tiger_thumbnail.jpg" alt="FOE - Eye of the Tiger Cassette" />
			</a>
			<h3>
				<a href="./friends-of-ed-eye-of-the-tiger"><acronym title="Friends of Ed">FOE</acronym> – Eye Of The Tiger</a>
			</h3>
			<p>
				FOE’s first recordings. 1990. Mostly joke cover songs.
			</p>
		</div>

		<div class="col-md-2">
			<a href="./friends-of-ed-its-ugly">
				<img src="./images/friends-of-ed-its_ugly_thumbnail.jpg" alt="FOE - It's Ugly Cassette" />
			</a>
			<h3>
				<a href="./friends-of-ed-its-ugly"><acronym title="Friends of Ed">FOE</acronym> – It’s Ugly</a>
			</h3>
			<p>
				Seven song EP recorded in 1991.
			</p>
		</div>

		<div class="col-md-2">
			<a href="./friends-of-ed-live-cape-cod-1992">
				<img src="./images/friends-of-ed-west_dennis_thumb.jpg" alt="FOE – Live on Cape Cod, 1992" />
			</a>
			<h3>
				<a href="./friends-of-ed-live-cape-cod-1992">Friends of Ed – Live: West Dennis, Cape Cod, 1992</a>
			</h3>
			<p>
				Opening for Seven League Boots and Green Day in West Dennis, Cape Code. May 30, 1992
			</p>
		</div>

		<div class="col-md-2">
			<a href="./friends-of-ed-live-wag-1992">
				<img src="./images/friends-of-ed-wag_thumbnail.jpg" alt="FOE – Live at W.A.G., 1992" />
			</a>
			<h3>
				<a href="./friends-of-ed-live-wag-1992">Friends of Ed – Live at W.A.G., Summer, 1992</a>
			</h3>
			<p>
				FOE's last show at W.A.G., Summer of 1992
			</p>
		</div>

		<div class="col-md-4">
			<a href="./friends-of-ed-berklee">
				<img src="./images/friends-of-ed-berklee-studio_b_thumbnail.jpg" alt="FOE – Berklee Studio B, 1994" />
			</a>
			<h3>
				<a href="./friends-of-ed-berklee">Friends of Ed – Berklee Studio B, 1994</a>
			</h3>
			<p>
				Trimmed down FOE session from the Boston years
			</p>
		</div>

	</div>

	<h2>Other Punk Stuff from Worcester in the '90s</h2>

	<div class="row">

		<div class="col-md-3">
			<a href="./neo-cerebral-subculture">
				<img src="./images/neo-cerebral-subculture-cover-thumbnail.jpg" alt="Neo-Cerebral Subculture - Cassette" />
			</a>
			<h3>
				<a href="./neo-cerebral-subculture">Neo-Cerebral Subculture – Cassette</a>
			</h3>
			<p>
				Neo-Cerebral Subculture. 1990 Cassette.
			</p>
		</div>

		<div class="col-md-3">
			<a href="./bosstones-live-at-wag-1991">
				<img src="./images/bosstones-wag_thumbnail.jpg" alt="Bosstones – Live at W.A.G." />
			</a>
			<h3>
				<a href="./bosstones-live-at-wag-1991">The Mighty Mighty Bosstones – Live at W.A.G., 1991</a>
			</h3>
			<p>
				Recorded at Worcester Artist Group, summer of 1991 right before <em>More Noise…</em>
				was released. This was the Bosstones’ first W.A.G. show and they tried to play
				every song they knew.
			</p>
		</div>

		<div class="col-md-3">
			<a href="./seven-league-boots-live-cape-cod-1992">
				<img src="./images/seven-league-boots-cape_cod.jpg" alt="Seven League Boots – Live on Cape Cod, 1992" />
			</a>
			<h3>
				<a href="./seven-league-boots-live-cape-cod-1992">Seven League Boots – Live: West Dennis, Cape Cod, 1992</a>
			</h3>
			<p>
				Opening for Green Day in West Dennis, Cape Code. May 30, 1992
			</p>
		</div>

		<div class="col-md-3">
		</div>

	</div>

	<h2>Hip Hop</h2>

	<div class="row">

		<div class="col-md-3">
			<a href="./dj-clark-kent">
				<img src="./images/clark-kent-thumbnail.jpg" alt="DJ Clark Kent" />
			</a>
			<h3>
				<a href="./dj-clark-kent">DJ Clark Kent – WBLS Radio Show, 1993</a>
			</h3>
			<p>
				Recorded from WBLS, 107.5 FM in NYC. This 1993 radio show features DJ Clark Kent
				playing some sweet classics.
			</p>
		</div>

		<div class="col-md-3">
		</div>

		<div class="col-md-3">
		</div>

		<div class="col-md-3">
		</div>

	</div>
<?
/*
		<div class="col-md-3">
			<a href="/audio/dbs">
				<img src="/audio/dbs/images/1200_thumbnail.jpg" alt="DJ Clark Kent" />
			</a>
			<h3>
				<a href="/audio/dbs">DBS – Freestyles, Turntables, Early Mid-90's</a>
			</h3>
			<p>
				Low-fi freestyles and DJ mixes from 486 Mass Ave, Boston.
			</p>
		</div>
*/
?>
</div>




<?php
/* --------------------------------------------------------------------- */
$template->place('footer');
