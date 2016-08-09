<?php
include $_SERVER['DOCUMENT_ROOT'] . '/inc/init.php';

$template->set('title', 'DJ Clark Kent, 1993 Radio Show, WBLS');
$template->set('section', 'audio');
$template->place('header');
?>


<div class="row">

	<article class="col-md-9">
		<h1>
			DJ Clark Kent, 1993 Radio Show, WBLS
			<a href="/audio/">More Audio</a>
		</h1>
		<p>
			This is a copy of a copy of a copy of a tape of 1993 radio show from WBLS,
			an FM radio station in New York. DJ Clark Kent tears it up.
		</p>
		<iframe width="100%" height="450" scrolling="no" frameborder="no" src="https://w.soundcloud.com/player/?url=https%3A//api.soundcloud.com/playlists/248729619&amp;auto_play=false&amp;hide_related=false&amp;show_comments=true&amp;show_user=true&amp;show_reposts=false&amp;visual=true"></iframe>

		<div class="row tracks">
			<div class="col-md-3">
				<h4>Track #1:</h4>
				<ul>
					<li><span>00:00</span> Grand Puba - 360 Degrees</li>
					<li><span>05:40</span> Zhigge - Toss It Up</li>
					<li><span>10:07</span> St. Ides Commercial</li>
				</ul>
			</div>
			<div class="col-md-3">
				<h4>Track #2:</h4>
				<ul>
					<li><span>00:00</span> EPMD - Cummin’ At Cha</li>
					<li><span>03:30</span> (?) - Get A Job</li>
					<li><span>08:40</span> Gangstarr - DWYCK</li>
				</ul>
			</div>
			<div class="col-md-3">
				<h4>Track #3:</h4>
				<ul>
					<li><span>00:00</span> EPMD - Crossover</li>
					<li><span>03:59</span> Main Source - Fakin’ the Funk</li>
					<li><span>07:36</span> Original Flavor - Here We Go (Pump It Up)</li>
					<li><span>12:11</span> Pete Rock &amp; C.L. Smooth - T.R.O.Y</li>
				</ul>
			</div>
			<div class="col-md-3">
				<h4>Track #4:</h4>
				<ul>
					<li><span>00:00</span> Das Efx - Mic Checka</li>
					<li><span>05:28</span> MC Serch - Here It Comes (partial)</li>
				</ul>
			</div>
		</div>
	</article>

	<aside class="col-md-3">
		<p>
			<img src="./images/clark-kent.jpg" alt="DJ Clark Kent" />
		</p>
		<p>
			<a href="http://dl.dropbox.com/u/6809778/music/1993-DJ_Clark_Kent.zip">Download Show (56MB)</a>
		</p>
		<p>
			<a href="/audio/">More Audio</a>
		</p>
	</aside>

</div>



<?php
$template->place('footer');
