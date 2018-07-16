<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "cuncejapp.grupoapp".
 *
 * @property int $id
 * @property string $nombre
 * @property string $url
 * @property string $activo
 * @property string $descripcion
 */
class grupoapp extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'cuncejapp.grupoapp';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['nombre', 'url', 'descripcion','activo'], 'required'],
            [['nombre'], 'string', 'max' => 100],
            [['url', 'descripcion'], 'string', 'max' => 255],
            [['activo'], 'string', 'max' => 2],
            [['nombre'], 'unique'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'nombre' => 'Nombre',
            'url' => 'Url',
            'activo' => 'Activo',
            'descripcion' => 'Descripcion',
        ];
    }
}
