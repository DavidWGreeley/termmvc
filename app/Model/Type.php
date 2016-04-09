<?php
App::uses('AppModel', 'Model');
/**
 * Type Model
 *
 * @property Dvd $Dvd
 */
class Type extends AppModel {
public $displayField = 'types';

	// The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * hasMany associations
 *
 * @var array
 */
	public $hasMany = array(
		'Dvd' => array(
			'className' => 'Dvd',
			'foreignKey' => 'type_id',
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
