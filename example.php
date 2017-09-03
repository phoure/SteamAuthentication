<?php
define('php-steamlogin', true);
require('main.php');
require_once 'classes/steam.class.php';

$SteamLogin = new SteamLogin(array(
	'username' => 'phoureo',
	'password' => 'Onyxofpols1',
	'datapath' => dirname(__FILE__) //path to saving cache files
));


	
	echo 'sss';
if($SteamLogin->success){
	$logindata = $SteamLogin->login('5RHNC');
	/*
	$logindata = array(
		'steamid' => 'xxx', //64-bit
		'sessionId' => 'xxx',
		'cookies' => 'xxx=xxx; yyy=yyy; '
	);
	*/
	
	//You can view steamcommunity.com from created session
	//$SteamLogin->view('http://steamcommunity.com/id/kysune');
	
	//Sending tradeoffers: https://github.com/halipso/php-steam-tradeoffers

	//print_r($logindata);




	$steam = new SteamTrade();
	$steam->setup('43e58e9bac60f46b4b013699','steamCountry=TH%7C1a5d9816e0a070e84a96e71fcc89fe59; steamLogin=76561198337282798%7C%7CA375DD35C27E8307F1BA187CFCF5FACB3FD51A6A; steamLoginSecure=76561198337282798%7C%7C3339E2D0E5D9CBEB7D40E785C15B1DD5C1044D8E; steamMachineAuth76561198337282798=DCE972623F0BD93BB5E5A1477D0DF9F0E187F794; steamRememberLogin=76561198337282798%7C%7C38a11c5ce5129ed1bcf9a45a53729bc0; sessionid=43e58e9bac60f46b4b013699;');
	$steam->loadMyInventory(730,1);

	print_r($steam);
	if($SteamLogin->error != '') echo $SteamLogin->error;
}else{
	echo $SteamLogin->error;
}
?>
