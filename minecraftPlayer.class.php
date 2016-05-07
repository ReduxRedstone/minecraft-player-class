<?php

/**
 * Class Minecraft Player
 *
 * @description Convert UUIDs to player names and player names to UUIDs.
 * @author Jonathan Barrow (halolink44@gmail.com)
 * @package Minecraft-Player
 * @version 1.0
 * @copyright 2016 Jonathan Barrow
 * @link https://github.com/ReduxRedstone/minecraft-player-class
 */
class Player {
	
	public function getUUID($username) {
	    if (strlen($username) >= 16) {
	        return false;
	    }
	    $base = "https://api.mojang.com/users/profiles/minecraft/";
	    $url = $base.$username;
	    $json = file_get_contents($url);
	    $data = json_decode($json, true);
	    if(!isset($data['id'])) {
	        return false;
	    }
	    if (isset($data['legacy'])) {
	        return false;
	    }
	    if (isset($data['demo'])) {
	        return false;
	    }
	    $uuid = $data['id'];
	    $uuid_full = substr_replace(substr_replace(substr_replace(substr_replace($uuid, '-', 8, 0), '-', 13, 0), '-', 18, 0), '-', 23, 0);;
	    return $uuid_full;
	}

	public function getUsername($uuid) {
	    if (strpos($uuid, "-") !== false) {
	        $uuid = explode("-", $uuid);
	        $uuid = implode("", $uuid);
	    }
	    $base = "https://api.mojang.com/user/profiles/";
	    $url = $base.$uuid."/names";
	    $json = file_get_contents($url);
	    $result = json_decode($json, true);
	    $num = sizeof($result);
	    $pos = $num-1;
	    $username = $result[$pos]["name"];
	    return $username;
	}
}
