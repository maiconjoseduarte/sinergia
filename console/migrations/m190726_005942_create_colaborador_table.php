<?php

use frontend\models\Grupo;
use yii\db\Migration;

/**
 * Handles the creation of table `{{%colaborador}}`.
 */
class m190726_005942_create_colaborador_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('Colaborador', [
            'id' => $this->primaryKey()->notNull(),
            'nome' => $this->string(),
            'cargo' => $this->integer()->defaultValue(1)
        ]);

        $this->addColumn(Grupo::tableName(), 'idGestor', $this->integer()->defaultValue(null));
        $this->addColumn(Grupo::tableName(), 'idSuporte', $this->integer()->defaultValue(null));

        $this->addForeignKey('grupo_id_gestor_colaborador', Grupo::tableName(), 'idGestor', 'Colaborador', 'id');
        $this->addForeignKey('grupo_id_suporte_colaborador', Grupo::tableName(), 'idSuporte', 'Colaborador', 'id');

    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {

        $this->dropForeignKey('grupo_id_gestor_colaborador', Grupo::tableName());
        $this->dropForeignKey('grupo_id_suporte_colaborador', Grupo::tableName());
        $this->dropColumn(Grupo::tableName(), 'idGestor');
        $this->dropColumn(Grupo::tableName(), 'idSuporte');
        $this->dropTable('Colaborador');
    }
}
