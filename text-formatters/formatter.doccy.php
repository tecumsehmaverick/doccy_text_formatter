<?php

	/**
	 * @package doccy_text_formatter
	 */

	/**
	 * A text formatter for Doccy, the lightweight markup language for technical writing.
	 */
	class FormatterDoccy extends TextFormatter {
		public function about() {
			public function about() {
				return array(
					'name'			=> 'Doccy',
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

		public function run($string) {
			if (class_exists('Doccy\\Template') === false) {
				require_once __DIR__ '/../doccy/libs/doccy.php';
			}

			$tpl = new Doccy\Template();
			$tpl->parseString($string);

			return (string)$tpl;
		}
	}