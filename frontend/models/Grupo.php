<?php

namespace frontend\models;

use Yii;
use yii\behaviors\TimestampBehavior;
use yii\db\Expression;

/**
 * This is the model class for table "Grupo".
 *
 * @property int $id
 * @property string $nome
 * @property string $create_at
 * @property string $update_at
 */
class Grupo extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'Grupo';
    }

    public function behaviors()
    {
        return [
            [
                'class' => TimestampBehavior::className(),
                'createdAtAttribute' => 'create_at',
                'updatedAtAttribute' => 'update_at',
                'value' => new Expression('NOW()'),
            ],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['nome', 'id'], 'required'],
            [['id'], 'integer'],
            [['create_at', 'update_at'], 'safe'],
            [['nome'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'Código',
            'nome' => 'Nome',
            'create_at' => 'Create At',
            'update_at' => 'Update At',
        ];
    }

    static public function select2Data()
    {
        $results = [];

        $grupos = self::find()->all();

        /** @var Grupo[] $grupos */
        if ($grupos != null) {
            foreach ($grupos as $grupo) {
                $results[$grupo->id] = "{$grupo->id} - {$grupo->nome}";
            }
        }

        return $results;
    }
}
