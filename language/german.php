<?php
/*	Project:	EQdkp-Plus
 *	Package:	Dragons Prophet game package
 *	Link:		http://eqdkp-plus.eu
 *
 *	Copyright (C) 2006-2015 EQdkp-Plus Developer Team
 *
 *	This program is free software: you can redistribute it and/or modify
 *	it under the terms of the GNU Affero General Public License as published
 *	by the Free Software Foundation, either version 3 of the License, or
 *	(at your option) any later version.
 *
 *	This program is distributed in the hope that it will be useful,
 *	but WITHOUT ANY WARRANTY; without even the implied warranty of
 *	MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 *	GNU Affero General Public License for more details.
 *
 *	You should have received a copy of the GNU Affero General Public License
 *	along with this program.  If not, see <http://www.gnu.org/licenses/>.
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