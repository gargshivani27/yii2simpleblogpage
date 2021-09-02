<?php

namespace app\models;

use Yii;
use yii\base\Model;

/**
 * LoginForm is the model behind the login form.
 *
 * @property-read User|null $user This property is read-only.
 *
 */
class SignUpForm extends Model
{
    public $username;
    public $password;
    public $confirm_passoword;

    public function rules()
        {
            return [
                [['username', 'password', 'confirm_passowrd'], 'required'],
                ['username', 'string', 'min' => 4, 'max' => 30],
                [['password', 'confirm_passoword'], 'string', 'min' => 8, 'max' => 255],
                [['confirm_password'], 'compare', 'compareAttribute' => 'password']
            ];
        }
        public function signup()
        {
            $user = new User();
            $user->username = $this->username;
            $user->auth_key = \Yii::$app->security->generateRandomString();
            $user->access_token = \Yii::$app->security->generateRandomString();
            $user->password = \Yii::$app->security->generatePasswordHash($this->password);
    
            if ($user->save()){
                return true;
            }
    
            \Yii::error("User was not saved: ".VarDumper::dumpAsString($user->errors));
            return false;
        }
    
}