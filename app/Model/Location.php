<?php
App::uses('AppModel', 'Model');
/**
 * Location Model
 *
 * @property Dvd $Dvd
 */
class Location extends AppModel {


	// The Associations below have been created with all possible keys, those that are not needed can be removed
public $displayField = 'location';
/**
 * hasMany associations
 *
 * @var array
 */
	public $hasMany = array(
		'Dvd' => array(
			'className' => 'Dvd',
			'foreignKey' => 'location_id',
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
