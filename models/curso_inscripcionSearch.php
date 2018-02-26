<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\curso_inscripcion;

/**
 * curso_inscripcionSearch represents the model behind the search form of `app\models\curso_inscripcion`.
 */
class curso_inscripcionSearch extends curso_inscripcion
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'id_curso'], 'integer'],
            [['cedula', 'fecha_inscripcion'], 'safe'],
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
        $query = curso_inscripcion::find();

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
            'id' => $this->id,
            'id_curso' => $this->id_curso,
            'fecha_inscripcion' => $this->fecha_inscripcion,
        ]);

        $query->andFilterWhere(['ilike', 'cedula', $this->cedula]);

        return $dataProvider;
    }
}
