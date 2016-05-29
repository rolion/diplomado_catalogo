<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "vehiculo".
 *
 * @property integer $id_vehiculo
 * @property string $vin
 * @property integer $kilometraje
 * @property double $precio
 * @property integer $idmodelo
 * @property integer $year
 *
 * @property Modelo $idmodelo0
 */
class Vehiculo extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'vehiculo';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['kilometraje', 'idmodelo', 'year'], 'integer'],
            [['precio'], 'number'],
            [['vin'], 'string', 'max' => 50],
            [['idmodelo'], 'exist', 'skipOnError' => true, 'targetClass' => Modelo::className(), 'targetAttribute' => ['idmodelo' => 'id_modelo']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id_vehiculo' => 'Id Vehiculo',
            'vin' => 'Vin',
            'kilometraje' => 'Kilometraje',
            'precio' => 'Precio',
            'idmodelo' => 'Idmodelo',
            'year' => 'Year',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getIdmodelo0()
    {
        return $this->hasOne(Modelo::className(), ['id_modelo' => 'idmodelo']);
    }
}
