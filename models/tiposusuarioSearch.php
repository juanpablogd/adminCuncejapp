<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\tiposusuario;

/**
 * tiposusuarioSearch represents the model behind the search form of `app\models\tiposusuario`.
 */
class tiposusuarioSearch extends tiposusuario
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id_tipousuario'], 'integer'],
            [['desc_tipousuario'], 'safe'],
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
        $query = tiposusuario::find();

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
            'id_tipousuario' => $this->id_tipousuario,
        ]);

        $query->andFilterWhere(['ilike', 'desc_tipousuario', $this->desc_tipousuario]);

        return $dataProvider;
    }
}
