<?php
App::uses('AppModel', 'Model');
/**
 * Genre Model
 *
 * @property Dvd $Dvd
 */
class Genre extends AppModel {

/**
 * Display field
 *
 * @var string
 */
	public $displayField = 'genre';


	// The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * hasAndBelongsToMany associations
 *
 * @var array
 */
	public $hasAndBelongsToMany = array(
		'Dvd' => array(
			'className' => 'Dvd',
			'joinTable' => 'genres_dvds',
			'foreignKey' => 'genre_id',
			'associationForeignKey' => 'dvd_id',
			'unique' => 'keepExisting',
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'finderQuery' => '',
		)
	);

}
