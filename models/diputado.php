<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "cuncejapp.diputado".
 *
 * @property int $id
 * @property string $nombre
 * @property string $partido
 * @property string $telefono
 * @property string $correo
 * @property string $telefono2
 * @property string $cargo
 * @property string $orden
 * @property string $biografia
 * @property string $municipio_origen
 * @property string $gestion
 * @property string $votacion
 * @property string $comision
 * @property string $redes_sociales
 * @property string $facebook
 * @property string $twitter
 * @property string $url
 * @property string $genero
 */
class diputado extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'cuncejapp.diputado';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['nombre', 'partido', 'biografia'], 'required'],
            [['genero'], 'string'],
            [['nombre', 'partido', 'telefono', 'correo', 'telefono2', 'cargo', 'orden', 'municipio_origen', 'redes_sociales'], 'string', 'max' => 100],
            [['biografia'], 'string', 'max' => 2048],
            [['gestion'], 'string', 'max' => 1023],
            [['votacion'], 'string', 'max' => 101],
            [['comision'], 'string', 'max' => 1024],
            [['facebook'], 'string', 'max' => 104],
            [['twitter'], 'string', 'max' => 105],
            [['url'], 'string', 'max' => 257],
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
            'partido' => 'Partido',
            'telefono' => 'Telefono',
            'correo' => 'Correo',
            'telefono2' => 'Telefono2',
            'cargo' => 'Cargo',
            'orden' => 'Orden',
            'biografia' => 'Biografia',
            'municipio_origen' => 'Municipio Origen',
            'gestion' => 'Gestion',
            'votacion' => 'Votacion',
            'comision' => 'Comision',
            'redes_sociales' => 'Redes Sociales',
            'facebook' => 'Facebook',
            'twitter' => 'Twitter',
            'url' => 'Url',
            'genero' => 'Genero',
        ];
    }
}
