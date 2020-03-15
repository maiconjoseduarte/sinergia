<?php

namespace frontend\models;

use Yii;
use yii\behaviors\TimestampBehavior;
use yii\db\Expression;

/**
 * This is the model class for table "Juridico".
 *
 * @property int $id
 * @property int $idGrupo
 * @property string $status
 * @property string $dataInicio
 * @property string $dataUltimaRenovacao
 * @property string $vencimento
 * @property double $multa
 * @property double $juros
 * @property string $minutaAditivo
 * @property string $statusAtual
 * @property string $comentario
 * @property string $email
 * @property string $telefone
 * @property string $create_at
 * @property string $update_at
 *
 * @property Grupo $grupo
 */
class Juridico extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'Juridico';
    }

    /**
     * @return array
     */
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
            [['idGrupo', 'id'], 'required'],
            [['idGrupo'], 'integer'],
            [['dataInicio', 'dataUltimaRenovacao', 'vencimento', 'create_at', 'update_at'], 'safe'],
            [['multa', 'juros'], 'number'],
            [['status', 'statusAtual'], 'string', 'max' => 20],
            [['minutaAditivo', 'comentario', 'email', 'telefone'], 'string', 'max' => 255],
            [['idGrupo'], 'exist', 'skipOnError' => true, 'targetClass' => Grupo::className(), 'targetAttribute' => ['idGrupo' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'idGrupo' => 'Id Grupo',
            'status' => 'Status',
            'dataInicio' => 'Data Inicio',
            'dataUltimaRenovacao' => 'Data Ultima Renovacao',
            'vencimento' => 'Vencimento',
            'multa' => 'Multa',
            'juros' => 'Juros',
            'minutaAditivo' => 'Minuta Aditivo',
            'statusAtual' => 'Status Atual',
            'comentario' => 'Comentario',
            'email' => 'Email',
            'telefone' => 'Telefone',
            'create_at' => 'Create At',
            'update_at' => 'Update At',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getGrupo()
    {
        return $this->hasOne(Grupo::className(), ['id' => 'idGrupo']);
    }
}
