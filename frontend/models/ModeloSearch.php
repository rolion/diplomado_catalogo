<?php

namespace frontend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use frontend\models\Modelo;

/**
 * ModeloSearch represents the model behind the search form about `frontend\models\Modelo`.
 */
class ModeloSearch extends Modelo
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['Id_modelo', 'Year', 'idmarca'], 'integer'],
            [['Modelo'], 'safe'],
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
        $query = Modelo::find();

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
            'Id_modelo' => $this->Id_modelo,
            'Year' => $this->Year,
            'idmarca' => $this->idmarca,
        ]);

        $query->andFilterWhere(['like', 'Modelo', $this->Modelo]);

        return $dataProvider;
    }
}
