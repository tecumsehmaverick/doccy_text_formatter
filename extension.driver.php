<?php

	/**
	 * @package doccy_text_formatter
	 */

	/**
	 * A text formatter for Doccy, the lightweight markup language for technical writing.
	 */
	class Extension_Doccy_Text_Formatter extends Extension {
		/**
		 * Extension information.
		 */
		public function about() {
			return array(
				'name'			=> 'Text Formatter: Doccy',
				'version'		=> '1.0',
				'release-date'	=> '2011-09-14',
				'author'		=> array(
					'name'			=> 'Rowan Lewis',
					'website'		=> 'http://rowanlewis.com/',
					'email'			=> 'me@rowanlewis.com'
				),
				'description'	=> 'A text formatter for Doccy, the lightweight markup language for technical writing.'
			);
		}
	}