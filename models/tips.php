<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "cuncejapp.tips".
 *
 * @property int $id
 * @property string $titulo
 * @property string $descripcion
 * @property string $activo
 */
class tips extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'cuncejapp.tips';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['activo'], 'string'],
            [['titulo'], 'string', 'max' => 150],
            [['descripcion'], 'string', 'max' => 512],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'titulo' => 'Titulo',
            'descripcion' => 'Descripcion',
            'activo' => 'Activo',
        ];
    }
}
