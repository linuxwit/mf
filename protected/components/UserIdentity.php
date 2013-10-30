<?php

class UserIdentity extends CUserIdentity {

    public $userType = 'Front';
    private $_id;

    public function getId() {
        return $this->_id;
    }

    public function authenticate() {
        if ($this->userType == 'Front') {
            $record = User::model()->findByAttributes(array('username' => $this->username));
            if ($record === null) {
                $this->errorCode = self::ERROR_USERNAME_INVALID;
            } else if ($record->password !== $this->password) {
                $this->errorCode = self::ERROR_PASSWORD_INVALID;
            } else {
                $this->_id = $record->userId;
                $this->setState('name', $record->firstName . ' ' . $record->lastName);
                $this->errorCode = self::ERROR_NONE;
            }
            return !$this->errorCode;
        }
        
        if ($this->userType == 'Back') {
            $record = AdminUser::model()->findByAttributes(array('email' => $this->username));
            if ($record === null) {
                $this->errorCode = self::ERROR_USERNAME_INVALID;
            } else if ($record->password !== base64_encode($this->password)) {
                $this->errorCode = self::ERROR_PASSWORD_INVALID;
            } else {
                $this->setState('isAdmin', 1);
                $this->_id = $record->userId;
                $this->setState('name', $record->name);
                $this->errorCode = self::ERROR_NONE;
            }
            return !$this->errorCode;
        }
    }

}