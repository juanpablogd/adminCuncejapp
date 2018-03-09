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
            [['cedula', 'consulta', 'fecha', 'tipo'], 'required'],
            [['fecha'], 'safe'],
            [['cedula', 'municipio'], 'string', 'max' => 100],
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
            'cedula' => 'Cedula',
            'consulta' => 'Consulta',
            'fecha' => 'Fecha',
            'tipo' => 'Tipo',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getIdCcConcejal()
    {
        return $this->hasOne(concejal::className(), ['cedula' => 'cedula']);
    }

}
