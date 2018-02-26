<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "cuncejapp.pregunta".
 *
 * @property int $id
 * @property string $pregunta
 * @property string $respuesta
 * @property int $orden
 */
class pregunta extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'cuncejapp.pregunta';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'pregunta', 'respuesta'], 'required'],
            [['id', 'orden'], 'default', 'value' => null],
            [['id', 'orden'], 'integer'],
            [['pregunta'], 'string', 'max' => 512],
            [['respuesta'], 'string', 'max' => 8192],
            [['id'], 'unique'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'pregunta' => 'Pregunta',
            'respuesta' => 'Respuesta',
            'orden' => 'Orden',
        ];
    }
}
