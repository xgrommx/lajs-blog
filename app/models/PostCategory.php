<?php
namespace flakron\blog\app\models;


/**
 * An Eloquent Model: 'flakron\blog\app\models\PostCategory'
 *
 * @author Flakron Bytyqi <flakron@gmail.com>
 * @property string $id
 * @property string $name
 * @property string $parent_id
 */
class PostCategory extends \Eloquent {

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'pst_category';

	/**
	 * No timestamps in tables
	 *
	 * @var bool
	 */
	public $timestamps = false;

} 