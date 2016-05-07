<?php

if (isset($_POST["data"], $_POST["type"])) {
	require 'minecraftPlayer.class.php';
	$player = new Player;

	if ($_POST["type"] == "uuid") {
		$uuid = $player->getUUID($_POST["data"]);
		echo $uuid;
	} else if ($_POST["type"] == "name") {
		$username = $player->getUsername($_POST["data"]);
		echo $username;
	} else if ($_POST["type"] == "hist") {
		$hist = $player->nameHist($_POST["data"]);
		echo $hist;
	} else {
		return false;
	}
}