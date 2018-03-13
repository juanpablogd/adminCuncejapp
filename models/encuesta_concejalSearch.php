<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\encuesta_concejal;

/**
 * encuesta_concejalSearch represents the model behind the search form of `app\models\encuesta_concejal`.
 */
class encuesta_concejalSearch extends encuesta_concejal
{
    var $nombres;
    var $apellidos;
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id'], 'integer'],
            [['apellidos', 'nombres','respuesta_1', 'respuesta_2', 'respuesta_3', 'respuesta_4', 'respuesta_5', 'respuesta_6', 'respuesta_7', 'respuesta_8', 'respuesta_9', 'respuesta_10', 'respuesta_11', 'respuesta_12', 'respuesta_13', 'texto_opcional', 'cedula'], 'safe'],
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
        $query = encuesta_concejal::find();

        // add conditions that should always apply here

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
            'sort' => ['attributes' => ['apellidos', 'nombres', 'cedula', 'fecha_sis'],
                        'defaultOrder' => ['fecha_sis'=>SORT_DESC]
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
            'id' => $this->id,
        ]);

        $query->andFilterWhere(['ilike', 'respuesta_1', $this->respuesta_1])
            ->andFilterWhere(['ilike', 'respuesta_2', $this->respuesta_2])
            ->andFilterWhere(['ilike', 'respuesta_3', $this->respuesta_3])
            ->andFilterWhere(['ilike', 'respuesta_4', $this->respuesta_4])
            ->andFilterWhere(['ilike', 'respuesta_5', $this->respuesta_5])
            ->andFilterWhere(['ilike', 'respuesta_6', $this->respuesta_6])
            ->andFilterWhere(['ilike', 'respuesta_7', $this->respuesta_7])
            ->andFilterWhere(['ilike', 'respuesta_8', $this->respuesta_8])
            ->andFilterWhere(['ilike', 'respuesta_9', $this->respuesta_9])
            ->andFilterWhere(['ilike', 'respuesta_10', $this->respuesta_10])
            ->andFilterWhere(['ilike', 'respuesta_11', $this->respuesta_11])
            ->andFilterWhere(['ilike', 'respuesta_12', $this->respuesta_12])
            ->andFilterWhere(['ilike', 'respuesta_13', $this->respuesta_13])
            ->andFilterWhere(['ilike', 'texto_opcional', $this->texto_opcional])
            ->andFilterWhere(['ilike', 'cedula', $this->cedula])
            ->andFilterWhere(['ilike', 'concejal.apellidos', $this->apellidos])
            ->andFilterWhere(['ilike', 'concejal.nombres', $this->nombres]);

        if ($this->fecha_sis != ''){
            $query->andFilterWhere(['>', 'fecha_sis', $this->fecha_sis." 00:00:00"]);
            $query->andFilterWhere(['<', 'fecha_sis', $this->fecha_sis." 23:59:59"]);            
        }

        return $dataProvider;
    }
}
