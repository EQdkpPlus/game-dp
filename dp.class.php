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

if(!class_exists('dp')) {
	class dp extends game_generic {
		protected static $apiLevel	= 20;
		public $version				= '0.1';
		protected $this_game		= 'dp';
		protected $types			= array('classes', 'races', 'filters');
		protected $classes			= array();
		protected $races			= array();
		protected $filters			= array();
		public $langs				= array('english', 'german');

		protected $class_dependencies = array(
			array(
				'name'		=> 'race',
				'type'		=> 'races',
				'admin'		=> false,
				'decorate'	=> true,
				'parent'	=> false
			),
			array(
				'name'		=> 'class',
				'type'		=> 'classes',
				'admin'		=> false,
				'decorate'	=> true,
				'primary'	=> true,
				'colorize'	=> true,
				'roster'	=> true,
				'recruitment' => true,
				'parent'	=> array(
					'race' => array(
						0 	=> 'all',			// Unknown
						1 	=> 'all',			// Osira
					),
				),
			),
		);
		
		protected $class_colors = array(
			1	=> '#FDCB00',
			2	=> '#474AF8',
			3	=> '#5D9900',
			4	=> '#EB0900',
		);

		protected $glang		= array();
		protected $lang_file	= array();
		protected $path			= '';
		public $lang			= false;

		public function profilefields(){
			// Category 'character' is a fixed one! All others are created dynamically!
			$xml_fields = array(
				'gender'	=> array(
					'type'			=> 'dropdown',
					'category'		=> 'character',
					'lang'			=> 'uc_gender',
					'options'		=> array('Male' => 'uc_male', 'Female' => 'uc_female'),
					'undeletable'	=> true,
					'tolang'		=> true
				),
				'guild'	=> array(
					'type'			=> 'text',
					'category'		=> 'character',
					'lang'			=> 'uc_guild',
					'size'			=> 32,
					'undeletable'	=> true,
				),
				'profession1'	=> array(
					'type'			=> 'dropdown',
					'category'		=> 'profession',
					'lang'			=> 'uc_profession1',
					'options'		=> array('none' => '------', 'alchemist' => 'Alchemist', 'armorsmith' => 'Armorsmith', 'carpenter' => 'Carpenter', 'cook' => 'Cook', 'tinkerer' => 'Tinkerer', 'weaponsmith' => 'Weaponsmith'),
					'undeletable'	=> true,
					'tolang'		=> true
				),
				'profession1_mastery'	=> array(
					'type'			=> 'int',
					'category'		=> 'profession',
					'lang'			=> 'uc_profession1_mastery',
					'size'			=> 3,
					'undeletable'	=> true,
				),
			);
			return $xml_fields;
		}

		protected function load_filters($langs){
			if(!$this->classes) {
				$this->load_type('classes', $langs);
			}
			foreach($langs as $lang) {
				$names = $this->classes[$this->lang];
				$this->filters[$lang][] = array('name' => '-----------', 'value' => false);
				foreach($names as $id => $name) {
					$this->filters[$lang][] = array('name' => $name, 'value' => 'class:'.$id);
				}
				
				$this->filters[$lang] = array_merge($this->filters[$lang], array(
					array('name' => '-----------', 'value' => false),
					array('name' => $this->glang('heavy', true, $lang), 'value' => array(1 => 'class')),
					array('name' => $this->glang('light', true, $lang), 'value' => array(1 => 'class', 3 => 'class')),
					array('name' => $this->glang('cloth', true, $lang), 'value' => array(1 => 'class', 2 => 'class', 3 => 'class', 4 => 'class')),
				));
			}
		}

		public function install($install=false){}
	}
}
?>