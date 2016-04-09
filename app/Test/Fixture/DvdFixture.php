<?php
/**
 * Dvd Fixture
 */
class DvdFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false, 'key' => 'primary'),
		'name' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 60, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'format_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false),
		'type_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false),
		'location_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false),
		'image_url' => array('type' => 'string', 'null' => true, 'default' => null, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'offical_website' => array('type' => 'string', 'null' => true, 'default' => null, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'imdb_link' => array('type' => 'string', 'null' => false, 'default' => null, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'rating_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false, 'key' => 'index'),
		'number_of_disk' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false),
		'number_of_episode' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false),
		'indexes' => array(
			'PRIMARY' => array('column' => 'id', 'unique' => 1),
			'rating_id' => array('column' => 'rating_id', 'unique' => 0)
		),
		'tableParameters' => array('charset' => 'latin1', 'collate' => 'latin1_swedish_ci', 'engine' => 'InnoDB')
	);

/**
 * Records
 *
 * @var array
 */
	public $records = array(
		array(
			'id' => 1,
			'name' => 'Lorem ipsum dolor sit amet',
			'format_id' => 1,
			'type_id' => 1,
			'location_id' => 1,
			'image_url' => 'Lorem ipsum dolor sit amet',
			'offical_website' => 'Lorem ipsum dolor sit amet',
			'imdb_link' => 'Lorem ipsum dolor sit amet',
			'rating_id' => 1,
			'number_of_disk' => 1,
			'number_of_episode' => 1
		),
	);

}
