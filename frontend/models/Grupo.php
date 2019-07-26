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
 * @property int $status
 *
 * @property Contrato[] $contratos
 * @property Filial[] $filials
 * @property Juridico[] $juridicos
 */
class Grupo extends \yii\db\ActiveRecord
{
    const CONTRATO = 1;
    const SINERGIA = 2;
    const IMCUBADORA = 3;

    public static $OPCOES_STATUS = [
        self::CONTRATO => 'Contrato',
        self::SINERGIA => 'Sinergia',
        self::IMCUBADORA => 'Incubadora',
    ];

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
            [['id'], 'unique'],
            [['create_at', 'update_at'], 'safe'],
            [['status'], 'integer'],
            [['nome'], 'string', 'max' => 255],
            [['status'], 'in', 'range' => array_keys(self::$OPCOES_STATUS)]
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
            'status' => 'Status',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getContratos()
    {
        return $this->hasMany(Contrato::className(), ['idGrupo' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getFilials()
    {
        return $this->hasMany(Filial::className(), ['idGrupo' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getJuridicos()
    {
        return $this->hasMany(Juridico::className(), ['idGrupo' => 'id']);
    }
}
