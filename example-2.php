<?php 

require('./Track.php');

use Apple\iTunes\Track;

$pdo = new PDO('sqlite:chinook.db');
$track = Spotify\Track::find(1, $pdo);
echo $track->Name;
echo $track->getSize('KB');