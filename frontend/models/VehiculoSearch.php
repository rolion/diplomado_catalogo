<?php

namespace frontend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use frontend\models\Vehiculo;

/**
 * VehiculoSearch represents the model behind the search form about `frontend\models\Vehiculo`.
 */
class VehiculoSearch extends Vehiculo
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['Id_vehiculo', 'kilometraje', 'idmodelo', 'id_dealer'], 'integer'],
            [['vin'], 'safe'],
            [['precio'], 'number'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function scenarios()
    {
        // bypass scenarios() implementation in the parent class
        return Model::scenarios();
    }

    /**
     * Creates data provider instance with search query applied
     *
     * @param array $params
     *
     * @return ActiveDataProvider
     */
    public function search($params)
    {
        $query = Vehiculo::find();

        // add conditions that should always apply here

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        // grid filtering conditions
        $query->andFilterWhere([
            'Id_vehiculo' => $this->Id_vehiculo,
            'kilometraje' => $this->kilometraje,
            'precio' => $this->precio,
            'idmodelo' => $this->idmodelo,
            'id_dealer' => $this->id_dealer,
        ]);

        $query->andFilterWhere(['like', 'vin', $this->vin]);

        return $dataProvider;
    }
}
