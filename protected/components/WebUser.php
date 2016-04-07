<?php
/**
 * Created by PhpStorm.
 * User: D05T0N
 * Date: 4/7/2016
 * Time: 2:42 PM
 */

class WebUser extends CWebUser {
    private $_model = null;

    function getRole() {
        if($user = $this->getModel()){
            // в таблице User есть поле role
            return $user->role;
        }
    }

    private function getModel(){
        if (!$this->isGuest && $this->_model === null){
            $this->_model = Teacher::model()->findByPk($this->id, array('select' => 'role'));
        }
        return $this->_model;
    }
}