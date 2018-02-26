<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "cuncejapp.curso_inscripcion".
 *
 * @property int $id
 * @property int $id_curso
 * @property string $cedula
 * @property string $fecha_inscripcion
 */
class curso_inscripcion extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'cuncejapp.curso_inscripcion';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id_curso'], 'default', 'value' => null],
            [['id_curso'], 'integer'],
            [['cedula'], 'required'],
            [['fecha_inscripcion'], 'safe'],
            [['cedula'], 'string', 'max' => 100],
            [['cedula'], 'exist', 'skipOnError' => true, 'targetClass' => concejal::className(), 'targetAttribute' => ['cedula' => 'cedula']],
            [['id_curso'], 'exist', 'skipOnError' => true, 'targetClass' => curso::className(), 'targetAttribute' => ['id_curso' => 'id']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'id_curso' => 'Id Curso',
            'cedula' => 'Cedula',
            'fecha_inscripcion' => 'Fecha Inscripcion',
        ];
    }
}
