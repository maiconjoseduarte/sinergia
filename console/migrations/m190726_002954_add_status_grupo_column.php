<?php

use frontend\models\Grupo;
use yii\db\Migration;

/**
 * Class m190726_002954_add_status_grupo_column
 */
class m190726_002954_add_status_grupo_column extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->addColumn(Grupo::tableName(), 'status', $this->integer()->defaultValue(1));

    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropColumn(Grupo::tableName(), 'status');
    }
}
