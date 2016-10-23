<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "bloc_cms".
 *
 * @property string $id
 * @property string $titulo
 * @property string $contenido
 * @property integer $publicar
 */
class blog extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'bloc_cms';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'titulo', 'contenido', 'publicar'], 'required'],
            [['contenido'], 'string'],
            [['publicar'], 'integer'],
            [['id'], 'string', 'max' => 20],
            [['titulo'], 'string', 'max' => 50],
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
            'titulo' => 'Titulo',
            'contenido' => 'Contenido',
            'publicar' => 'Publicar',
        ];
    }
}
