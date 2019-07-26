<?php

use frontend\models\Grupo;
use yii\db\Migration;

/**
 * Handles the creation of table `{{%juridico}}`.
 */
class m190725_231013_create_juridico_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('Juridico', [
            'id' => $this->primaryKey(),
            'idGrupo' => $this->integer()->notNull(),
            'status' => $this->string(20),
            'dataInicio' => $this->date(),
            'dataUltimaRenovacao' => $this->date(),
            'vencimento' => $this->date(),
            'multa' => $this->double(),
            'juros' => $this->double(),
            'minutaAditivo' => $this->string(),
            'statusAtual' => $this->string(20),
            'comentario' => $this->string(),
            'nomeResponsavel' => $this->string(),
            'email' => $this->string(),
            'telefone' => $this->string(),
            'create_at' => $this->dateTime(),
            'update_at' => $this->dateTime(),
        ]);

        $this->addForeignKey('juridico_id_grupo_grupo', 'Juridico', 'idGrupo', Grupo::tableName(), 'id');

    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropForeignKey('juridico_id_grupo_grupo', 'Juridico');
        $this->dropTable('Juridico');
    }
}
