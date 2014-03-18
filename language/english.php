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
 * $Id: english.php 12817 2013-01-12 21:52:22Z wallenium $
 */

if ( !defined('EQDKP_INC') ){
	header('HTTP/1.0 404 Not Found');exit;
}
$english_array = array(
	'classes' => array(
		0 => 'Unknown',
		1 => 'Guardian',
		2 => 'Oracle',
		3 => 'Ranger',
		4 => 'Sorcerer',
	),
	'races' => array(
		0	=> 'Unknown',
		1	=> 'Osira',
	),

	'lang' => array(
		'dp'							=> 'Dragon\'s Prophet',
		'heavy'							=> 'Heavy',
		'light'							=> 'Light',
		'cloth'							=> 'Cloth',	
		
		// profile additions
		'uc_gender'						=> 'Gender',
		'uc_male'						=> 'Male',
		'uc_female'						=> 'Female',
		'uc_guild'						=> 'Guild',
		
		'profession1'					=> 'Profession',
		'profession1_mastery'			=> 'Master-Level of Profession',
	),
	
);
?>