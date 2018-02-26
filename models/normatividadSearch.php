<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\normatividad;

/**
 * normatividadSearch represents the model behind the search form of `app\models\normatividad`.
 */
class normatividadSearch extends normatividad
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'orden'], 'integer'],
            [['num', 'epigrafe', 'url', 'fecha', 'claves', 'ley', 'tipo'], 'safe'],
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
        $query = normatividad::find();

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

        $query->andFilterWhere(['ilike', 'num', $this->num])
            ->andFilterWhere(['ilike', 'epigrafe', $this->epigrafe])
            ->andFilterWhere(['ilike', 'url', $this->url])
            ->andFilterWhere(['ilike', 'fecha', $this->fecha])
            ->andFilterWhere(['ilike', 'claves', $this->claves])
            ->andFilterWhere(['ilike', 'ley', $this->ley])
            ->andFilterWhere(['ilike', 'tipo', $this->tipo]);

        return $dataProvider;
    }
}
