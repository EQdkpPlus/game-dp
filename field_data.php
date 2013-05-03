<?php

if ( !defined('EQDKP_INC') ){
	header('HTTP/1.0 404 Not Found');exit;
}

// Category 'character' is a fix one! All others are created dynamically!

$xml_fields = array(

	'gender'	=> array(
		'type'			=> 'dropdown',
		'category'		=> 'character',
		'name'			=> 'uc_gender',
		'options'		=> array('Male' => 'uc_male', 'Female' => 'uc_female'),
		'undeletable'	=> true,
		'visible'		=> true
	),
	'guild'	=> array(
		'type'			=> 'text',
		'category'		=> 'character',
		'name'			=> 'uc_guild',
		'size'			=> 40,
		'undeletable'	=> true,
		'visible'		=> true	
	),
	
		'profession1'	=> array(
		'type'			=> 'dropdown',
		'category'		=> 'profession',
		'name'			=> 'profession1',
		'options'		=> array('none' => '------', 'alchemist' => 'Alchemist', 'armorsmith' => 'Armorsmith', 'carpenter' => 'Carpenter', 'cook' => 'Cook', 'tinkerer' => 'Tinkerer', 'weaponsmith' => 'Weaponsmith'),
		'undeletable'	=> true,
		'enabled'		=> true,
	),
	
		'profession1_mastery'	=> array(
		'type'			=> 'int',
		'category'		=> 'profession',
		'name'			=> 'profession1_mastery',
		'size'			=> 3,
		'undeletable'	=> true,
		'enabled'		=> true,
	),

);
?>