<?php
App::uses('AppModel', 'Model');
/**
 * Dvd Model
 *
 * @property Format $Format
 * @property Type $Type
 * @property Location $Location
 * @property Rating $Rating
 * @property Genre $Genre
 */
class Dvd extends AppModel {

/**
 * Display field
 *
 * @var string
 */
	public $displayField = 'name';


	// The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * belongsTo associations
 *
 * @var array
 */
	public $belongsTo = array(
		'Format' => array(
			'className' => 'Format',
			'foreignKey' => 'format_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'Type' => array(
			'className' => 'Type',
			'foreignKey' => 'type_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'Location' => array(
			'className' => 'Location',
			'foreignKey' => 'location_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'Rating' => array(
			'className' => 'Rating',
			'foreignKey' => 'rating_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);

/**
 * hasAndBelongsToMany associations
 *
 * @var array
 */
	public $hasAndBelongsToMany = array(
		'Genre' => array(
			'className' => 'Genre',
			'joinTable' => 'genres_dvds',
			'foreignKey' => 'dvd_id',
			'associationForeignKey' => 'genre_id',
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
