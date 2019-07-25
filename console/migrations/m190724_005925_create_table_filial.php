<?php

use yii\db\Migration;

/**
 * Class m190724_005925_create_table_filial
 */
class m190724_005925_create_table_filial extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('Filial', [
            'id' => $this->primaryKey()->notNull(),
            'idGrupo' => $this->integer()->notNull(),
            'nome' => $this->string()->notNull(),
            'codIsoWeb' => $this->integer(),
            'documento' => $this->string(20),
            'uf' => $this->string(2),
            'especialidade' => $this->string(),
            'codResponsavel' => $this->integer(),
            'nomeResponsavel' => $this->string(),
            'nomeSuporte' => $this->string(),
            'icms' => $this->integer(),
            'cdFaturamento' => $this->string(5),
            'ledTime' => $this->integer(2),
            'create_at' => $this->dateTime(),
            'update_at' => $this->dateTime(),
        ]);

        $this->addForeignKey('filial_id_grupo', 'Filial', 'idGrupo', \frontend\models\Grupo::tableName(), 'id');

    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropForeignKey('filial_id_grupo','Filial');
        $this->dropTable('Filial');
    }

}
