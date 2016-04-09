<?php
App::uses('AppModel', 'Model');
/**
 * Format Model
 *
 * @property Dvd $Dvd
 */
class Format extends AppModel {


	// The Associations below have been created with all possible keys, those that are not needed can be removed
public $displayField = 'format';
/**
 * hasMany associations
 *
 * @var array
 */
	public $hasMany = array(
		'Dvd' => array(
			'className' => 'Dvd',
			'foreignKey' => 'format_id',
			'dependent' => false,
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'exclusive' => '',
			'finderQuery' => '',
			'counterQuery' => ''
		)
	);

}
