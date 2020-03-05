<?php

use frontend\models\Colaborador;
use frontend\models\Filial;
use yii\db\Migration;

/**
 * Class m200305_015036_change_table_filial
 */
class m200305_015036_change_table_filial extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->addColumn(Filial::tableName(), 'nomeCidade', $this->string(30)->after('uf'));
        $this->alterColumn(Filial::tableName(), 'codResponsavel', $this->integer()->after('nomeCidade'));
        $this->addColumn(Filial::tableName(), 'codSuporte', $this->integer()->after('codResponsavel'));
        $this->dropColumn(Filial::tableName(), 'nomeResponsavel');
        $this->dropColumn(Filial::tableName(), 'nomeSuporte');

        $this->addForeignKey('filial_cod_responsavel_colaborador', 'Filial', 'codResponsavel', Colaborador::tableName(), 'id');
        $this->addForeignKey('filial_cod_suporte_colaborador', 'Filial', 'codSuporte', Colaborador::tableName(), 'id');
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropForeignKey('filial_cod_suporte_colaborador', Filial::tableName());
        $this->dropForeignKey('filial_cod_responsavel_colaborador', Filial::tableName());

        $this->dropColumn(Filial::tableName(), 'nomeCidade');
        $this->dropColumn(Filial::tableName(), 'codResponsavel');
        $this->dropColumn(Filial::tableName(), 'codSuporte');
    }
}
