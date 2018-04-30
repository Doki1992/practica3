<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "Cuenta".
 *
 * @property int $idCuenta
 * @property string $Saldo
 * @property int $IdUser
 *
 * @property UserP $user
 */
class Cuenta extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'Cuenta';
    }

    public $cantidad;
    public $cuenta;
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['idCuenta'], 'required'],
            [['idCuenta', 'IdUser'], 'integer'],
            [['Saldo'], 'number'],
            [['idCuenta'], 'unique'],
            [['IdUser'], 'exist', 'skipOnError' => true, 'targetClass' => UserP::className(), 'targetAttribute' => ['IdUser' => 'idUserP']],
            [['cantidad'], 'safe'],
            [['cuenta'], 'safe'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'idCuenta' => 'Id Cuenta',
            'Saldo' => 'Saldo',
            'IdUser' => 'Id User',
            'cantidad' => 'Cantidad',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getUser()
    {
        return $this->hasOne(UserP::className(), ['idUserP' => 'IdUser']);
    }

    

    public static function findByAccount($account)
    {
        return self::findOne(['idCuenta' => $account]);
    } 

	public function getId()
    {
        return $this->idCuenta;
    }       
}
