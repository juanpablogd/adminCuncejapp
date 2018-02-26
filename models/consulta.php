<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "cuncejapp.consulta".
 *
 * @property int $id
 * @property string $apellidos
 * @property string $nombres
 * @property string $cargo
 * @property string $cedula
 * @property int $celular
 * @property string $correo_electronico
 * @property string $municipio
 * @property string $consulta
 * @property string $actualizar_datos
 * @property string $fecha
 * @property int $id_concejal
 * @property string $tipo
 */
class Consulta extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'cuncejapp.consulta';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['apellidos', 'nombres', 'cedula', 'correo_electronico', 'consulta', 'fecha'], 'required'],
            [['celular', 'id_concejal'], 'default', 'value' => null],
            [['celular', 'id_concejal'], 'integer'],
            [['fecha'], 'safe'],
            [['apellidos', 'nombres', 'actualizar_datos'], 'string', 'max' => 150],
            [['cargo'], 'string', 'max' => 50],
            [['cedula', 'municipio'], 'string', 'max' => 100],
            [['correo_electronico'], 'string', 'max' => 250],
            [['consulta'], 'string', 'max' => 2048],
            [['tipo'], 'string', 'max' => 7],
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
            'apellidos' => 'Apellidos',
            'nombres' => 'Nombres',
            'cargo' => 'Cargo',
            'cedula' => 'Cedula',
            'celular' => 'Celular',
            'correo_electronico' => 'Correo Electronico',
            'municipio' => 'Municipio',
            'consulta' => 'Consulta',
            'actualizar_datos' => 'Actualizar Datos',
            'fecha' => 'Fecha',
            'id_concejal' => 'Id Concejal',
            'tipo' => 'Tipo',
        ];
    }
}
