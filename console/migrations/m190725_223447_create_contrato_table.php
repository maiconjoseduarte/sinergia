<?php

use frontend\models\Grupo;
use yii\db\Migration;

/**
 * Handles the creation of table `{{%contrato}}`.
 */
class m190725_223447_create_contrato_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('Contrato', [
            'id' => $this->primaryKey()->notNull(),
            'idGrupo' => $this->integer()->notNull(),
            'dataInicio' => $this->date(),
            'totalReceitaLiquidaInicio' => $this->double(),
            'margemBrutaPonderada' => $this->double(),
            'dataUltimaRenovacao' => $this->date(),
            'vencimento' => $this->date(),
            'reajustePonderado' => $this->double(),
            'margemBrutaPonderadaRenovacao' => $this->double(),
            'totalReceitaLiquidaRenovacao' => $this->double(),
            'condicaoPagamento' => $this->string(),
            'minimo' => $this->double(),
            'numeroLeitos' => $this->integer(),
            'tabela' => $this->string(),
            'icms' => $this->integer(),
            'enquadramento' => $this->integer(),
            'nomeGestor' => $this->string(),
            'create_at' => $this->dateTime(),
            'update_at' => $this->dateTime(),
        ]);

        $this->addForeignKey('contrato_id_grupo_grupo', 'Contrato', 'idGrupo', Grupo::tableName(), 'id');

    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropForeignKey('contrato_id_grupo_grupo', 'Contrato');
        $this->dropTable('Contrato');
    }
}
