<?php

class UserIdentity extends CUserIdentity {
	// Будем хранить id.
	protected $_id;

	// Данный метод вызывается один раз при аутентификации пользователя.
	public function authenticate(){
		// Производим стандартную аутентификацию, описанную в руководстве.
		$user = Teacher::model()->find('LOWER(login)=?', array(strtolower($this->username)));
		if(($user===null) || ($this->password!==$user->parol)) {
			$this->errorCode = self::ERROR_USERNAME_INVALID;
		} else {
			// В качестве идентификатора будем использовать id, а не username,
			// как это определено по умолчанию. Обязательно нужно переопределить
			// метод getId(см. ниже).
			$this->_id = $user->id;

			// Далее логин нам не понадобится, зато имя может пригодится
			// в самом приложении. Используется как Yii::app()->user->name.
			// realName есть в нашей модели. У вас это может быть name, firstName
			// или что-либо ещё.
			$this->username = $user->login;
			$this->setState('roles', $user->role);
			$this->errorCode = self::ERROR_NONE;
		}
		return !$this->errorCode;
	}

	public function getId(){
		return $this->_id;
	}
}