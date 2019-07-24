<?php

use yii\db\Migration;

/**
 * Class m190723_233316_create_table_grupo
 */
class m190723_233316_create_table_grupo extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('Grupo', [
            'id' => $this->primaryKey()->notNull(),
            'nome' => $this->string(255)->notNull(),
            'create_at' => $this->dateTime(),
            'update_at' => $this->dateTime(),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('Grupo');
    }
}
