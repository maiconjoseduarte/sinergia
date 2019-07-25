<?php

namespace frontend\models;

use Yii;
use yii\behaviors\TimestampBehavior;
use yii\db\Expression;

/**
 * This is the model class for table "Contrato".
 *
 * @property int $id
 * @property int $idGrupo
 * @property string $dataInicio
 * @property double $totalReceitaLiquidaInicio
 * @property double $margemBrutaPonderada
 * @property string $dataUltimaRenovacao
 * @property string $vencimento
 * @property double $reajustePonderado
 * @property double $margemBrutaPonderadaRenovacao
 * @property double $totalReceitaLiquidaRenovacao
 * @property string $condicaoPagamento
 * @property double $minimo
 * @property int $numeroLeitos
 * @property string $tabela
 * @property int $icms
 * @property int $enquadramento
 * @property string $nomeGestor
 * @property string $create_at
 * @property string $update_at
 *
 * @property Grupo $grupo
 */
class Contrato extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'Contrato';
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
            [['idGrupo', 'id'], 'required'],
            [['idGrupo', 'numeroLeitos', 'icms', 'enquadramento'], 'integer'],
            [['dataInicio', 'dataUltimaRenovacao', 'vencimento', 'create_at', 'update_at'], 'safe'],
            [['totalReceitaLiquidaInicio', 'margemBrutaPonderada', 'reajustePonderado', 'margemBrutaPonderadaRenovacao', 'totalReceitaLiquidaRenovacao', 'minimo'], 'number'],
            [['condicaoPagamento', 'tabela', 'nomeGestor'], 'string', 'max' => 255],
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
            'dataInicio' => 'Data Inicio',
            'totalReceitaLiquidaInicio' => 'Total Receita Liquida Inicio',
            'margemBrutaPonderada' => 'Margem Bruta Ponderada',
            'dataUltimaRenovacao' => 'Data Ultima Renovacao',
            'vencimento' => 'Vencimento',
            'reajustePonderado' => 'Reajuste Ponderado',
            'margemBrutaPonderadaRenovacao' => 'Margem Bruta Ponderada Renovacao',
            'totalReceitaLiquidaRenovacao' => 'Total Receita Liquida Renovacao',
            'condicaoPagamento' => 'Condicao Pagamento',
            'minimo' => 'Minimo',
            'numeroLeitos' => 'Numero Leitos',
            'tabela' => 'Tabela',
            'icms' => 'Icms',
            'enquadramento' => 'Enquadramento',
            'nomeGestor' => 'Nome Gestor',
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
