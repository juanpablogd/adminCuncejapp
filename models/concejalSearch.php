<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\concejal;

/**
 * concejalSearch represents the model behind the search form of `app\models\concejal`.
 */
class concejalSearch extends concejal
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'orden', 'id_tipousuario'], 'integer'],
            [['apellidos', 'nombres', 'cargo', 'cedula', 'telefono', 'correo_electronico', 'municipio', 'provincia', 'escolaridad', 'clave', 'dt_registro', 'dt_actualizacion'], 'safe'],
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
        $query = concejal::find();

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
            'id_tipousuario' => $this->id_tipousuario,
            'dt_registro' => $this->dt_registro,
            'dt_actualizacion' => $this->dt_actualizacion,
        ]);

        $query->andFilterWhere(['ilike', 'apellidos', $this->apellidos])
            ->andFilterWhere(['ilike', 'nombres', $this->nombres])
            ->andFilterWhere(['ilike', 'cargo', $this->cargo])
            ->andFilterWhere(['ilike', 'cedula', $this->cedula])
            ->andFilterWhere(['ilike', 'telefono', $this->telefono])
            ->andFilterWhere(['ilike', 'correo_electronico', $this->correo_electronico])
            ->andFilterWhere(['ilike', 'municipio', $this->municipio])
            ->andFilterWhere(['ilike', 'provincia', $this->provincia])
            ->andFilterWhere(['ilike', 'escolaridad', $this->escolaridad])
            ->andFilterWhere(['ilike', 'clave', $this->clave]);

        return $dataProvider;
    }
}
