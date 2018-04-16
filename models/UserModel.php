<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "User".
 *
 * @property int $idUser
 * @property string $name
 * @property string $password
 */
class UserModel extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'User';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['idUser'], 'required'],
            [['idUser'], 'integer'],
            [['name', 'password'], 'string', 'max' => 45],
            [['idUser'], 'unique'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'idUser' => 'Id User',
            'name' => 'Name',
            'password' => 'Password',
        ];
    }
}
