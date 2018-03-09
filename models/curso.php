<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "cuncejapp.curso".
 *
 * @property int $id
 * @property string $institucion
 * @property string $titulo
 * @property string $fecha_inicio
 * @property string $modalidad
 * @property string $horario
 * @property string $duracion
 * @property string $dirigido
 * @property string $objetivo
 * @property string $metodologia
 * @property string $conferencistas
 * @property string $certificacion
 * @property int $prioridad
 * @property string $web
 * @property string $url_imagen
 * @property string $activo
 * @property string $tipocurso
 */
class curso extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'cuncejapp.curso';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['fecha_inicio'], 'safe'],
            [['prioridad'], 'default', 'value' => null],
            [['prioridad'], 'integer'],
            [['activo', 'tipocurso'], 'string'],
            [['institucion', 'titulo'], 'string', 'max' => 80],
            [['modalidad'], 'string', 'max' => 100],
            [['horario', 'dirigido', 'url_imagen'], 'string', 'max' => 256],
            [['duracion', 'objetivo', 'conferencistas'], 'string', 'max' => 512],
            [['metodologia', 'certificacion'], 'string', 'max' => 2048],
            [['web'], 'string', 'max' => 128],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'institucion' => 'Institucion',
            'titulo' => 'Titulo',
            'fecha_inicio' => 'Fecha Inicio',
            'modalidad' => 'Modalidad',
            'horario' => 'Horario',
            'duracion' => 'Duracion',
            'dirigido' => 'Dirigido',
            'objetivo' => 'Objetivo',
            'metodologia' => 'Metodologia',
            'conferencistas' => 'Conferencistas',
            'certificacion' => 'Certificacion',
            'prioridad' => 'Prioridad',
            'web' => 'Web',
            'url_imagen' => 'Url Imagen',
            'activo' => 'Activo',
            'tipocurso' => 'Tipocurso',
        ];
    }
    /**
     * @return \yii\db\ActiveQuery
     */
    public function getInscripcion()
    {
        return $this->hasMany(consulta::className(), ['id_curso' => 'id']);
    }
}
