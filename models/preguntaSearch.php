<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\pregunta;

/**
 * preguntaSearch represents the model behind the search form of `app\models\pregunta`.
 */
class preguntaSearch extends pregunta
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'orden'], 'integer'],
            [['pregunta', 'respuesta'], 'safe'],
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
        $query = pregunta::find();

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
            'orden' => $this->orden,
        ]);

        $query->andFilterWhere(['ilike', 'pregunta', $this->pregunta])
            ->andFilterWhere(['ilike', 'respuesta', $this->respuesta]);

        return $dataProvider;
    }
}
