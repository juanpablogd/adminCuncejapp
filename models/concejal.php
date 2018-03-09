<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "cuncejapp.concejal".
 *
 * @property int $id
 * @property string $apellidos
 * @property string $nombres
 * @property string $cargo
 * @property string $cedula
 * @property string $telefono
 * @property string $correo_electronico
 * @property string $municipio
 * @property string $provincia
 * @property string $escolaridad
 * @property int $orden
 * @property string $clave
 * @property int $id_tipousuario
 * @property string $dt_registro
 * @property string $dt_actualizacion
 */
class concejal extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'cuncejapp.concejal';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['apellidos', 'nombres', 'cedula', 'municipio', 'telefono', 'correo_electronico','clave','escolaridad'], 'required'],
            [['orden'], 'default', 'value' => null],
            [['orden', 'id_tipousuario'], 'integer'],
            [['dt_registro', 'dt_actualizacion'], 'safe'],
            [['apellidos', 'nombres', 'cargo', 'cedula', 'telefono', 'correo_electronico', 'municipio', 'provincia', 'escolaridad'], 'string', 'max' => 100],
            [['clave'], 'string', 'max' => 50],
            [['cedula'], 'unique'],
            [['id_tipousuario'], 'exist', 'skipOnError' => true, 'targetClass' => tiposusuario::className(), 'targetAttribute' => ['id_tipousuario' => 'id_tipousuario']],
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
            'telefono' => 'Telefono',
            'correo_electronico' => 'Correo Electronico',
            'municipio' => 'Municipio',
            'provincia' => 'Provincia',
            'escolaridad' => 'Escolaridad',
            'orden' => 'Orden',
            'clave' => 'Clave de acceso',
            'id_tipousuario' => 'Id Tipousuario',
            'dt_registro' => 'Dt Registro',
            'dt_actualizacion' => 'Dt Actualizacion',
        ];
    }

    public function getfullName()
    {
            return $this->nombres.' '.$this->apellidos;
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getConsulta()
    {
        return $this->hasMany(consulta::className(), ['cedula' => 'cedula']);
    }
    /**
     * @return \yii\db\ActiveQuery
     */
    public function getInscripcion()
    {
        return $this->hasMany(curso_inscripcion::className(), ['cedula' => 'cedula']);
    }
}
