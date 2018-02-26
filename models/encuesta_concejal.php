<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "cuncejapp.encuesta_concejal".
 *
 * @property int $id
 * @property string $respuesta_1
 * @property string $respuesta_2
 * @property string $respuesta_3
 * @property string $respuesta_4
 * @property string $respuesta_5
 * @property string $respuesta_6
 * @property string $respuesta_7
 * @property string $respuesta_8
 * @property string $respuesta_9
 * @property string $respuesta_10
 * @property string $respuesta_11
 * @property string $respuesta_12
 * @property string $respuesta_13
 * @property string $texto_opcional
 * @property string $cedula
 */
class encuesta_concejal extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'cuncejapp.encuesta_concejal';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['respuesta_1', 'respuesta_2', 'respuesta_3', 'respuesta_4', 'respuesta_5', 'respuesta_6', 'respuesta_7', 'respuesta_8', 'respuesta_9', 'respuesta_10', 'respuesta_11', 'respuesta_12', 'respuesta_13'], 'string', 'max' => 45],
            [['texto_opcional'], 'string', 'max' => 256],
            [['cedula'], 'string', 'max' => 100],
            [['cedula'], 'exist', 'skipOnError' => true, 'targetClass' => concejal::className(), 'targetAttribute' => ['cedula' => 'cedula']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'respuesta_1' => 'Respuesta 1',
            'respuesta_2' => 'Respuesta 2',
            'respuesta_3' => 'Respuesta 3',
            'respuesta_4' => 'Respuesta 4',
            'respuesta_5' => 'Respuesta 5',
            'respuesta_6' => 'Respuesta 6',
            'respuesta_7' => 'Respuesta 7',
            'respuesta_8' => 'Respuesta 8',
            'respuesta_9' => 'Respuesta 9',
            'respuesta_10' => 'Respuesta 10',
            'respuesta_11' => 'Respuesta 11',
            'respuesta_12' => 'Respuesta 12',
            'respuesta_13' => 'Respuesta 13',
            'texto_opcional' => 'Texto Opcional',
            'cedula' => 'Cedula',
        ];
    }
}
