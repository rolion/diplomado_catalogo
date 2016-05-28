<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "modelo".
 *
 * @property integer $id_modelo
 * @property string $Modelo
 * @property integer $idmarca
 *
 * @property Marca $idmarca0
 * @property Vehiculo[] $vehiculos
 */
class Modelo extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'modelo';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['Modelo'], 'string'],
            [['idmarca'], 'integer'],
            [['idmarca'], 'exist', 'skipOnError' => true, 'targetClass' => Marca::className(), 'targetAttribute' => ['idmarca' => 'id_marca']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id_modelo' => 'Id Modelo',
            'Modelo' => 'Modelo',
            'idmarca' => 'Idmarca',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getIdmarca0()
    {
        return $this->hasOne(Marca::className(), ['id_marca' => 'idmarca']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getVehiculos()
    {
        return $this->hasMany(Vehiculo::className(), ['idmodelo' => 'id_modelo']);
    }
}
