<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\curso;

/**
 * cursoSearch represents the model behind the search form of `app\models\curso`.
 */
class cursoSearch extends curso
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'prioridad'], 'integer'],
            [['institucion', 'titulo', 'fecha_inicio', 'modalidad', 'horario', 'duracion', 'dirigido', 'objetivo', 'metodologia', 'conferencistas', 'certificacion', 'web', 'url_imagen', 'activo', 'tipocurso'], 'safe'],
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
        $query = curso::find();

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
            'fecha_inicio' => $this->fecha_inicio,
            'prioridad' => $this->prioridad,
        ]);

        $query->andFilterWhere(['ilike', 'institucion', $this->institucion])
            ->andFilterWhere(['ilike', 'titulo', $this->titulo])
            ->andFilterWhere(['ilike', 'modalidad', $this->modalidad])
            ->andFilterWhere(['ilike', 'horario', $this->horario])
            ->andFilterWhere(['ilike', 'duracion', $this->duracion])
            ->andFilterWhere(['ilike', 'dirigido', $this->dirigido])
            ->andFilterWhere(['ilike', 'objetivo', $this->objetivo])
            ->andFilterWhere(['ilike', 'metodologia', $this->metodologia])
            ->andFilterWhere(['ilike', 'conferencistas', $this->conferencistas])
            ->andFilterWhere(['ilike', 'certificacion', $this->certificacion])
            ->andFilterWhere(['ilike', 'web', $this->web])
            ->andFilterWhere(['ilike', 'url_imagen', $this->url_imagen])
            ->andFilterWhere(['ilike', 'activo', $this->activo])
            ->andFilterWhere(['ilike', 'tipocurso', $this->tipocurso]);

        return $dataProvider;
    }
}
