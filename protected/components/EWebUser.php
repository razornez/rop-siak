<?php
class EWebUser extends CWebUser{
 
    //protected $_model;
 
    protected function loadUser()
    {   
        //query user berdasarkan id yang sedang login
        //Yii::app()->user->id == user id yang login
        $model = User::model()->findBypk(Yii::app()->user->id);
        return $model;  
    }
    
    function getLevel()
    {
        $user=$this->loadUser();
        if($user)
            return $user->GROUP_ID;
        else
            return 100;
    }
}