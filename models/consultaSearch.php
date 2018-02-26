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
            [['id', 'celular', 'id_concejal'], 'integer'],
            [['apellidos', 'nombres', 'cargo', 'cedula', 'correo_electronico', 'municipio', 'consulta', 'actualizar_datos', 'fecha'], 'safe'],
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
            'celular' => $this->celular,
            'fecha' => $this->fecha,
            'id_concejal' => $this->id_concejal,
        ]);

        $query->andFilterWhere(['ilike', 'apellidos', $this->apellidos])
            ->andFilterWhere(['ilike', 'nombres', $this->nombres])
            ->andFilterWhere(['ilike', 'cargo', $this->cargo])
            ->andFilterWhere(['ilike', 'cedula', $this->cedula])
            ->andFilterWhere(['ilike', 'correo_electronico', $this->correo_electronico])
            ->andFilterWhere(['ilike', 'municipio', $this->municipio])
            ->andFilterWhere(['ilike', 'consulta', $this->consulta])
            ->andFilterWhere(['ilike', 'actualizar_datos', $this->actualizar_datos])
            ->orderBy('fecha DESC');

        return $dataProvider;
    }
}
