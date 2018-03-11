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
    var $nombres;
    var $apellidos;
    var $titulo;
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'id_curso'], 'integer'],
            [['apellidos', 'nombres', 'cedula', 'fecha_inscripcion','titulo'], 'safe'],
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
            'sort' => ['attributes' => ['apellidos', 'nombres', 'cedula', 'fecha_inscripcion','titulo'],
                        'defaultOrder' => ['fecha_inscripcion'=>SORT_DESC]
                        ]
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        $query->joinWith('idCcConcejal');
        $query->joinWith('idCurso');

        // grid filtering conditions
        $query->andFilterWhere([
            'id' => $this->id,
            'id_curso' => $this->id_curso,
        ]);

        $query->andFilterWhere(['ilike', 'concejal.cedula', $this->cedula])
            ->andFilterWhere(['ilike', 'concejal.apellidos', $this->apellidos])
            ->andFilterWhere(['ilike', 'concejal.nombres', $this->nombres])
            ->andFilterWhere(['ilike', 'curso.titulo', $this->titulo]);

        if ($this->fecha_inscripcion != ''){
            $query->andFilterWhere(['>', 'fecha_inscripcion', $this->fecha_inscripcion." 00:00:00"]);
            $query->andFilterWhere(['<', 'fecha_inscripcion', $this->fecha_inscripcion." 23:59:59"]);            
        }


        return $dataProvider;
    }
}
