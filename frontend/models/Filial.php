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
 * @property string $especialidade
 * @property int $codResponsavel
 * @property string $nomeResponsavel
 * @property string $nomeSuporte
 * @property int $icms
 * @property string $cdFaturamento
 * @property int $ledTime
 * @property string $create_at
 * @property string $update_at
 *
 * @property Grupo $grupo
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
            [['id', 'idGrupo', 'codIsoWeb', 'codResponsavel', 'icms', 'ledTime'], 'integer'],
            [['create_at', 'update_at'], 'safe'],
            [['nome', 'especialidade', 'nomeResponsavel', 'nomeSuporte'], 'string', 'max' => 255],
            [['documento'], 'string', 'max' => 20],
            [['uf'], 'string', 'max' => 2],
            [['cdFaturamento'], 'string', 'max' => 5],
            [['idGrupo'], 'exist', 'skipOnError' => true, 'targetClass' => Grupo::className(), 'targetAttribute' => ['idGrupo' => 'id']],
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
            'especialidade' => 'Especialidade do cliente',
            'codResponsavel' => 'Cod. Responsavel',
            'nomeResponsavel' => 'Nome Responsavel',
            'nomeSuporte' => 'Nome Suporte',
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
}
