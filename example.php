<?php

require 'minecraftPlayer.class.php';
$player = new Player;


$uuid = $player->getUUID("alvin8t");
echo $uuid."<br>";

$username = $player->getUsername("997e3b3a-cd4b-4334-9a96-4c4cd51decf8");
print_r($username);
