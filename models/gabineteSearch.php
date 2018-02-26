<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\gabinete;

/**
 * gabineteSearch represents the model behind the search form of `app\models\gabinete`.
 */
class gabineteSearch extends gabinete
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'orden'], 'integer'],
            [['cargo', 'nombre', 'detalle', 'telefono', 'telefono2', 'correo', 'resumen', 'activo', 'genero'], 'safe'],
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
        $query = gabinete::find();

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

        $query->andFilterWhere(['ilike', 'cargo', $this->cargo])
            ->andFilterWhere(['ilike', 'nombre', $this->nombre])
            ->andFilterWhere(['ilike', 'detalle', $this->detalle])
            ->andFilterWhere(['ilike', 'telefono', $this->telefono])
            ->andFilterWhere(['ilike', 'telefono2', $this->telefono2])
            ->andFilterWhere(['ilike', 'correo', $this->correo])
            ->andFilterWhere(['ilike', 'resumen', $this->resumen])
            ->andFilterWhere(['ilike', 'activo', $this->activo])
            ->andFilterWhere(['ilike', 'genero', $this->genero]);

        return $dataProvider;
    }
}
