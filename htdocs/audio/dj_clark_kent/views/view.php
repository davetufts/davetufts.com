<?
$template->set('title',      'DJ Clark Kent, 1993 Radio Show, WBLS');
$template->set('body_class',  'audio');
$template->place('header');
?>


<article>

	<h1>
		DJ Clark Kent, 1993 Radio Show, WBLS
		<a href="/audio/">More Audio</a>
	</h1>

	<p>
		This is a copy of a copy of a copy of a tape of 1993 radio show from WBLS,
		an FM radio station in New York. DJ Clark Kent tears it up.
	</p>

	<? Playa::printPlayer($playlist, $_SERVER['DOCUMENT_ROOT'] . $songs) ?>

</article>



<aside>

	<p>
		<img src="./images/clark_kent.jpg" alt="DJ Clark Kent" />
	</p>

	<div class="details">

		<h4>Track #1:</h4>

		<ul>
			<li>00:00 Grand Puba - 360 Degrees</li>
			<li>05:40 Zhigge - Toss It Up</li>
			<li>10:07 St. Ides Commercial</li>
		</ul>

		<h4>Track #2:</h4>

		<ul>
			<li>00:00 EPMD - Cummin’ At Cha</li>
			<li>03:30 (?) - Get A Job</li>
			<li>08:40 Gangstarr - DWYCK</li>
		</ul>

		<h4>Track #3:</h4>

		<ul>
			<li>00:00 EPMD - Crossover</li>
			<li>03:59 Main Source - Fakin’ the Funk</li>
			<li>07:36 Original Flavor - Here We Go (Pump It Up)</li>
			<li>12:11 Pete Rock &amp; C.L. Smooth - T.R.O.Y</li>
		</ul>

		<h4>Track #4:</h4>

		<ul>
			<li>00:00 Das Efx - Mic Checka</li>
			<li>05:28 MC Serch - Here It Comes (partial)</li>
		</ul>

	</div>

	<p>
		<a href="http://dl.dropbox.com/u/6809778/music/1993-DJ_Clark_Kent.zip">Download Show (56MB)</a>
	</p>
	<p>
		<a href="/audio/">More Audio</a>
	</p>

</aside>



<?php
$template->place('footer');
