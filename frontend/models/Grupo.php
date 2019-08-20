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
 * @property int $status
 * @property int $idGestor
 * @property int $idSuporte
 * @property string $create_at
 * @property string $update_at
 *
 * @property Contrato $contrato
 * @property Filial $filiais
 * @property Colaborador $gestor
 * @property Colaborador $suporte
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
            [['status', 'idGestor', 'idSuporte'], 'integer'],
            [['nome'], 'string', 'max' => 255],
            [['status'], 'in', 'range' => array_keys(self::$OPCOES_STATUS)],
            [['idGestor'], 'exist', 'skipOnError' => true, 'targetClass' => Colaborador::className(), 'targetAttribute' => ['idGestor' => 'id']],
            [['idSuporte'], 'exist', 'skipOnError' => true, 'targetClass' => Colaborador::className(), 'targetAttribute' => ['idSuporte' => 'id']],

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
            'idGestor' => 'Gestor',
            'idSuporte' => 'Suporte'
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getContrato()
    {
        return $this->hasMany(Contrato::className(), ['idGrupo' => 'id'])->one();
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getFiliais()
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

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getGestor()
    {
        return $this->hasOne(Colaborador::className(), ['id' => 'idGestor']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getSuporte()
    {
        return $this->hasOne(Colaborador::className(), ['id' => 'idSuporte']);
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
