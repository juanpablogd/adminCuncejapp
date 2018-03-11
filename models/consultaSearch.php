<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\consulta;

/**
 * consultaSearch represents the model behind the search form of `app\models\consulta`.
 */
class consultaSearch extends consulta
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id'], 'integer'],
            [['apellidos', 'nombres', 'cedula', 'consulta', 'fecha', 'tipo'], 'safe'],
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
        $query = consulta::find();

        // add conditions that should always apply here

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
            'sort' => ['attributes' => ['apellidos', 'nombres', 'cedula', 'consulta', 'fecha', 'tipo'],
                        'defaultOrder' => ['fecha'=>SORT_DESC]
                        ]
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        $query->joinWith('idCcConcejal');

        // grid filtering conditions
        $query->andFilterWhere([
            'fecha' => $this->fecha,
        ]);

        $query->andFilterWhere(['ilike', 'concejal.apellidos', $this->apellidos])
            ->andFilterWhere(['ilike', 'concejal.nombres', $this->nombres])
            ->andFilterWhere(['ilike', 'consulta.cedula', $this->cedula])
            ->andFilterWhere(['ilike', 'consulta', $this->consulta])
            ->andFilterWhere(['ilike', 'tipo', $this->tipo])
            ->orderBy('fecha DESC');

        return $dataProvider;
    }
}
