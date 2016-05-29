<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "dealer".
 *
 * @property integer $id_dealer
 * @property string $Nombre
 * @property string $Apellido
 * @property integer $Telefono
 * @property string $Correo
 *
 * @property Vehiculo[] $vehiculos
 */
class Dealer extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'dealer';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id_dealer'], 'required'],
            [['id_dealer', 'Telefono'], 'integer'],
            [['Nombre', 'Apellido', 'Correo'], 'string', 'max' => 50],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id_dealer' => 'Id Dealer',
            'Nombre' => 'Nombre',
            'Apellido' => 'Apellido',
            'Telefono' => 'Telefono',
            'Correo' => 'Correo',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getVehiculos()
    {
        return $this->hasMany(Vehiculo::className(), ['id_dealer' => 'id_dealer']);
    }
}
