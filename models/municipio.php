<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "administrativa.g_municipio_simp".
 *
 * @property string $codigo_mun
 * @property string $nombre_mun
 * @property string $geom
 * @property string $codigo_pro
 * @property string $padre
 */
class municipio extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'administrativa.g_municipio_simp';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['codigo_mun'], 'required'],
            [['geom'], 'string'],
            [['codigo_mun'], 'string', 'max' => 5],
            [['nombre_mun'], 'string', 'max' => 100],
            [['codigo_pro'], 'string', 'max' => 10],
            [['padre'], 'string', 'max' => 18],
            [['codigo_mun'], 'unique'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'codigo_mun' => 'Codigo Mun',
            'nombre_mun' => 'Nombre Mun',
            'geom' => 'Geom',
            'codigo_pro' => 'Codigo Pro',
            'padre' => 'Padre',
        ];
    }
}
