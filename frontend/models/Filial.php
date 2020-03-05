<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "Filial".
 *
 * @property int $id
 * @property int $idGrupo
 * @property string $nome
 * @property int $codIsoWeb
 * @property string $documento
 * @property string $uf
 * @property string $nomeCidade
 * @property string $especialidade
 * @property int $codResponsavel
 * @property int $codSuporte
 * @property int $icms
 * @property string $cdFaturamento
 * @property int $ledTime
 * @property string $create_at
 * @property string $update_at
 *
 * @property Grupo $grupo
 * @property Colaborador $responsavel
 * @property Colaborador $suporte
 */
class Filial extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'Filial';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'idGrupo', 'nome'], 'required'],
            [['id', 'idGrupo', 'codIsoWeb', 'codResponsavel', 'codSuporte', 'icms', 'ledTime'], 'integer'],
            [['create_at', 'update_at'], 'safe'],
            [['nome', 'especialidade'], 'string', 'max' => 255],
            [['documento'], 'string', 'max' => 20],
            [['nomeCidade'], 'string', 'max' => 30],
            [['uf'], 'string', 'max' => 2],
            [['cdFaturamento'], 'string', 'max' => 5],
            [['idGrupo'], 'exist', 'skipOnError' => true, 'targetClass' => Grupo::className(), 'targetAttribute' => ['idGrupo' => 'id']],
            [['codResponsavel'], 'exist', 'skipOnError' => true, 'targetClass' => Colaborador::className(), 'targetAttribute' => ['codResponsavel' => 'id']],
            [['codSuporte'], 'exist', 'skipOnError' => true, 'targetClass' => Colaborador::className(), 'targetAttribute' => ['codSuporte' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'Cod BPCS',
            'idGrupo' => 'Grupo',
            'nome' => 'Razão Social',
            'codIsoWeb' => 'Cod. Iso Web',
            'documento' => 'Documento',
            'uf' => 'Uf',
            'nomeCidade' => 'Cidade',
            'especialidade' => 'Especialidade do cliente',
            'codResponsavel' => 'Cod. Responsavel',
            'codSuporte' => 'Cod. Suporte',
            'icms' => 'Icms',
            'cdFaturamento' => 'Cd Faturamento',
            'ledTime' => 'Led Time',
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

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getResponsavel()
    {
        return $this->hasOne(Colaborador::className(), ['id' => 'codResponsavel']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getSuporte()
    {
        return $this->hasOne(Colaborador::className(), ['id' => 'codSuporte']);
    }
}
