<?php

/**
 * UserIdentity represents the data needed to identity a user.
 * It contains the authentication method that checks if the provided
 * data can identity the user.
 */
class UserIdentity extends CUserIdentity
{
	private $_id;
	/**
	 * Authenticates a user.
	 * The example implementation makes sure if the username and password
	 * are both 'demo'.
	 * In practical applications, this should be changed to authenticate
	 * against some persistent user identity storage (e.g. database).
	 * @return boolean whether authentication succeeds.
	 */
	public function authenticate()
	{
		
		$user = User::model()->find('USER_NAME = ? AND USER_PASSWORD = ?', array($this->username, $this->password));
		if($user== null)
			$this->errorCode=self::ERROR_USERNAME_INVALID;
		else {
			$this->errorCode=self::ERROR_NONE;
			$this->_id= $user->USER_ID;
			$this->setState('USER_NAME', $user->USER_NAME);
		}
		return !$this->errorCode;
	}
	
	public function getId()
	{
		return $this->_id;	
	}
}