<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "cuncejapp.gabinete".
 *
 * @property int $id
 * @property string $cargo
 * @property string $nombre
 * @property string $detalle
 * @property string $telefono
 * @property string $telefono2
 * @property string $correo
 * @property string $resumen
 * @property int $orden
 * @property string $activo
 * @property string $genero
 */
class gabinete extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'cuncejapp.gabinete';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['cargo', 'nombre', 'correo', 'detalle', 'telefono', 'resumen', 'orden', 'activo', 'genero'], 'required'],
            [['orden'], 'default', 'value' => null],
            [['orden'], 'integer'],
            [['activo', 'genero'], 'string'],
            [['cargo'], 'string', 'max' => 101],
            [['nombre'], 'string', 'max' => 102],
            [['detalle'], 'string', 'max' => 2048],
            [['telefono'], 'string', 'max' => 103],
            [['telefono2'], 'string', 'max' => 104],
            [['correo'], 'string', 'max' => 105],
            [['resumen'], 'string', 'max' => 1024],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'cargo' => 'Cargo',
            'nombre' => 'Nombre',
            'detalle' => 'Detalle',
            'telefono' => 'Telefono Celular',
            'telefono2' => 'Telefono Fijo',
            'correo' => 'Correo',
            'resumen' => 'Resumen',
            'orden' => 'Orden',
            'activo' => 'Activo',
            'genero' => 'Genero',
        ];
    }
}
