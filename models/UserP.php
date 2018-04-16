<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "UserP".
 *
 * @property int $idUserP
 * @property string $username
 * @property string $password
 * @property string $authKey
 * @property string $mail
 * @property string $alias
 *
 * @property Cuenta[] $cuentas
 */
class UserP extends \yii\db\ActiveRecord implements \yii\web\IdentityInterface
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'UserP';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['idUserP'], 'required'],
            [['idUserP'], 'integer'],
            [['username', 'password', 'authKey', 'mail', 'alias'], 'string', 'max' => 45],
            [['username'], 'unique'],
            [['idUserP'], 'unique'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'idUserP' => 'Id User P',
            'username' => 'Username',
            'password' => 'Password',
            'authKey' => 'Auth Key',
            'mail' => 'Mail',
            'alias' => 'Alias',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCuentas()
    {
        return $this->hasMany(Cuenta::className(), ['IdUser' => 'idUserP']);
    }

       public static function findIdentity($id) 
                    { 
                        return self::findOne($id); 
                    } 
                   
                    public function validatePassword($password) 
                    { 
                        return $this->password === $password; 
                    } 
                   
                    public static function findByUserName($name) 
                    { 
                        return new static(self::findOne(['username' => $name])); 
                    } 
                   
                    public static function findIdentityByAccessToken($token, $type = null) 
                    { 
                        throw new NotSupportedException();       
                    } 
                   
                    public function getId() 
                    { 
                        return $this->idUserP; 
                    } 
                   
                    public function getAuthKey() 
                    { 
                        return $this->authKey; 
                    } 
                   
                    public function validateAuthKey($authKey) 
                    { 
                        return $this->authKey === $authKey; 
                    } 
}
