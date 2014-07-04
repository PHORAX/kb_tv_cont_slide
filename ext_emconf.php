<?php

/***************************************************************
 * Extension Manager/Repository config file for ext "kb_tv_cont_slide".
 ***************************************************************/

$EM_CONF[$_EXTKEY] = array(
	'title' => 'KB TV Content Slide',
	'description' => 'This extension allows you to inherit the content of a TemplaVoila content element column to its child pages',
	'category' => 'plugin',
	'shy' => 0,
	'version' => '0.5.0',
	'dependencies' => '',
	'conflicts' => '',
	'priority' => '',
	'loadOrder' => '',
	'module' => '',
	'state' => 'stable',
	'uploadfolder' => 0,
	'createDirs' => '',
	'modify_tables' => '',
	'clearcacheonload' => 0,
	'lockType' => '',
	'author' => 'Bernhard Kraft',
	'author_email' => 'kraftb@think-open.at',
	'author_company' => '',
	'CGLcompliance' => '',
	'CGLcompliance_note' => '',
	'constraints' => array(
		'depends' => array(
			'php' => '5.2.0-0.0.0',
			'typo3' => '6.2.0-6.2.99',
			'templavoila' => '1.9.0-1.9.99',
		),
		'conflicts' => array(
		),
		'suggests' => array(
		),
	),
);

?>
