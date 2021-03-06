<?php
namespace flakron\blog\app\models;

use Illuminate\Auth\UserInterface;
use Illuminate\Auth\Reminders\RemindableInterface;

/**
 * An Eloquent Model: 'flakron\blog\app\models\User'
 *
 * @author Flakron Bytyqi <flakron@gmail.com>
 * @property string $id
 * @property string $login
 * @property string $salt
 * @property string $password
 * @property boolean $active
 */
class User extends \Eloquent implements UserInterface, RemindableInterface {

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'usr_user';

	/**
	 * The attributes excluded from the model's JSON form.
	 *
	 * @var array
	 */
	protected $hidden = array('password', 'salt');

	/**
	 * No timestamps in tables
	 *
	 * @var bool
	 */
	public $timestamps = false;

	/**
	 * Get the unique identifier for the user.
	 *
	 * @return mixed
	 */
	public function getAuthIdentifier()
	{
		return $this->getKey();
	}

	/**
	 * Get the password for the user.
	 *
	 * @return string
	 */
	public function getAuthPassword()
	{
		return $this->password;
	}

	/**
	 * Get the e-mail address where password reminders are sent.
	 *
	 * @return string
	 */
	public function getReminderEmail()
	{
		return $this->login;
	}

}