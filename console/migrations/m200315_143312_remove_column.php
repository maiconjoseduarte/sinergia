<?php

use yii\db\Migration;

/**
 * Class m200315_143312_remove_column
 */
class m200315_143312_remove_column extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->dropColumn(\frontend\models\Contrato::tableName(), 'nomeGestor');
        $this->dropColumn(\frontend\models\Juridico::tableName(), 'nomeResponsavel');
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
    }

}
