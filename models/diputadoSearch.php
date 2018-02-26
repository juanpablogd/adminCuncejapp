<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\diputado;

/**
 * diputadoSearch represents the model behind the search form of `app\models\diputado`.
 */
class diputadoSearch extends diputado
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id'], 'integer'],
            [['nombre', 'partido', 'telefono', 'correo', 'telefono2', 'cargo', 'orden', 'biografia', 'municipio_origen', 'gestion', 'votacion', 'comision', 'redes_sociales', 'facebook', 'twitter', 'url', 'genero'], 'safe'],
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
        $query = diputado::find();

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
        ]);

        $query->andFilterWhere(['ilike', 'nombre', $this->nombre])
            ->andFilterWhere(['ilike', 'partido', $this->partido])
            ->andFilterWhere(['ilike', 'telefono', $this->telefono])
            ->andFilterWhere(['ilike', 'correo', $this->correo])
            ->andFilterWhere(['ilike', 'telefono2', $this->telefono2])
            ->andFilterWhere(['ilike', 'cargo', $this->cargo])
            ->andFilterWhere(['ilike', 'orden', $this->orden])
            ->andFilterWhere(['ilike', 'biografia', $this->biografia])
            ->andFilterWhere(['ilike', 'municipio_origen', $this->municipio_origen])
            ->andFilterWhere(['ilike', 'gestion', $this->gestion])
            ->andFilterWhere(['ilike', 'votacion', $this->votacion])
            ->andFilterWhere(['ilike', 'comision', $this->comision])
            ->andFilterWhere(['ilike', 'redes_sociales', $this->redes_sociales])
            ->andFilterWhere(['ilike', 'facebook', $this->facebook])
            ->andFilterWhere(['ilike', 'twitter', $this->twitter])
            ->andFilterWhere(['ilike', 'url', $this->url])
            ->andFilterWhere(['ilike', 'genero', $this->genero]);

        return $dataProvider;
    }
}
