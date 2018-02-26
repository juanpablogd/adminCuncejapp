<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "cuncejapp.tiposusuario".
 *
 * @property int $id_tipousuario
 * @property string $desc_tipousuario
 */
class tiposusuario extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'cuncejapp.tiposusuario';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['desc_tipousuario'], 'string', 'max' => 100],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id_tipousuario' => 'Id Tipousuario',
            'desc_tipousuario' => 'Desc Tipousuario',
        ];
    }
}
