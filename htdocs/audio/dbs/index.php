<?php
include $_SERVER['DOCUMENT_ROOT'] . '/inc/init.php';

$action = fRequest::getValid(
	'action',
	array(
		'view',
		'playlist', 
		'download'
	)
);


$playlist = "/audio/dbs/?action=playlist";
$songs    = "/audio/dbs/songs/";




/* ---------------------------------- */
/* ---------------------------------- */
if ('view' == $action) {
	include './views/view.php';
}





/* ---------------------------------- */
/* ---------------------------------- */ 
if ('playlist' == $action) {
	Playa::printPlaylist($_SERVER['DOCUMENT_ROOT'] . $songs);
	exit;
}








/* ---------------------------------- */
/* ---------------------------------- */ 
if ('download' == $action) {
	$song_number = fRequest::get('song');	
	Playa::download($_SERVER['DOCUMENT_ROOT'] . $songs, $song_number);
}


