<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "cuncejapp.normatividad".
 *
 * @property int $id
 * @property string $num
 * @property string $epigrafe
 * @property string $url
 * @property string $fecha
 * @property string $claves
 * @property string $ley
 * @property int $orden
 * @property string $tipo
 */
class normatividad extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'cuncejapp.normatividad';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['num', 'epigrafe', 'claves','categoria','subcategoria','fecha','tipo', 'orden'], 'required'],
            [[ 'orden'], 'default', 'value' => null],
            [['orden'], 'integer'],
            [['tipo','categoria','subcategoria'], 'string'],
            [['num'], 'string', 'max' => 256],
            [['epigrafe', 'claves'], 'string', 'max' => 1024],
            [['url'], 'string', 'max' => 103],
            [['fecha'], 'string', 'max' => 105],
            [['ley'], 'string', 'max' => 107],
            [['num'], 'unique'],
        ];
    }

    public function getfullUrl()
    {
            return 'http://saga.cundinamarca.gov.co/SIG/data/doc/cuncejapp/normatividad/'.$this->url;
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'num' => 'Num',
            'epigrafe' => 'Epigrafe',
            'url' => 'Url',
            'fecha' => 'Fecha',
            'claves' => 'Claves',
            'ley' => 'Ley',
            'orden' => 'Orden',
            'tipo' => 'Tipo',
            'categoria' => 'Categoria',
            'subcategoria' => 'Subcategoria',
        ];
    }
}
