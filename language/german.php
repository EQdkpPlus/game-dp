<?php
 /*
 * Project:		EQdkp-Plus
 * License:		Creative Commons - Attribution-Noncommercial-Share Alike 3.0 Unported
 * Link:		http://creativecommons.org/licenses/by-nc-sa/3.0/
 * -----------------------------------------------------------------------
 * Began:		2009
 * Date:		$Date: 2013-01-12 22:52:22 +0100 (Sa, 12. Jan 2013) $
 * -----------------------------------------------------------------------
 * @author		$Author: wallenium $
 * @copyright	2006-2011 EQdkp-Plus Developer Team
 * @link		http://eqdkp-plus.com
 * @package		eqdkp-plus
 * @version		$Rev: 12817 $
 * 
 * $Id: german.php 12817 2013-01-12 21:52:22Z wallenium $
 */

if ( !defined('EQDKP_INC') ){
	header('HTTP/1.0 404 Not Found');exit;
}
$german_array = array(
	'classes' => array(
		0	=> 'Unbekannt',
		1	=> 'Waffenmeister',
		2	=> 'Orakel',
		3	=> 'Windläufer',
		4	=> 'Zauberer',
	),
	'races' => array(
		0	=> 'Unknown',
		1	=> 'Osira',
	),

	'lang' => array(
		'dp'							=> 'Dragon\'s Prophet',
		'heavy'							=> 'Schwere Rüstung',
		'light'							=> 'Leichte Rüstung',
		'cloth'							=> 'Stoffrüstung',	
		
		// profile additions
		'uc_gender'						=> 'Geschlecht',
		'uc_male'						=> 'Männlich',
		'uc_female'						=> 'Weiblich',
		'uc_guild'						=> 'Gilde',
		'uc_race'						=> 'Rasse',
		'uc_class'						=> 'Klasse',
		
		'uc_profession1'				=> 'Beruf',
		'uc:profession1_mastery'		=> 'Meister-Stufe des Berufs',
	
		'none'							=> '------', 
		'Alchemist'						=> 'Alchemist', 
		'Armorsmith'					=> 'Rüstungsschmied', 
		'Carpenter'						=> 'Schreiner', 
		'Cook'							=> 'Koch', 
		'Tinkerer'						=> 'Bastler', 
		'Weaponsmith'					=> 'Waffenschmied',
	
	),
	
);
?>