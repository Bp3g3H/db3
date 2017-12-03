<?php

use yii\db\Migration;

/**
 * Class m171203_164249_alter_offer_table
 */
class m171203_164249_alter_offer_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function safeUp()
    {
        $this->addColumn('offers', 'title', 'varchar(60)');
        $this->addColumn('offers', 'category', 'int(10) NOT NULL');
    }

    /**
     * @inheritdoc
     */
    public function safeDown()
    {
        $this->dropColumn('offers', 'title');
        $this->dropColumn('offers', 'category');
    }

}
