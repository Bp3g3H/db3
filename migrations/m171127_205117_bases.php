<?php

use yii\db\Migration;

/**
 * Class m171127_205117_bases
 */
class m171127_205117_bases extends Migration
{

    public function up()
    {
        $this->createTable('users',[
            'id' => $this->primaryKey(11),
            'username' => $this->string(60)->notNull(),
            'password' => $this->string(60)->notNull(),
            'email' => $this->string(60)->notNull(),
            'phone' => $this->integer(20)->notNull(),
            'created_at' => $this->dateTime(),
            'updated_at' => $this->dateTime(),
        ]);

        $this->createTable('offers',[
            'id' => $this->primaryKey(11),
            'user_id' => $this->integer(11)->notNull(),
            'description' => $this->text(),
            'price' => $this->float(20),
            'created_at' => $this->dateTime(),
            'updated_at' => $this->dateTime(),
        ]);

        $this->addForeignKey('user_offers', 'offers', 'user_id', 'users', 'id');

        $this->createTable('offer_images',[
            'id' => $this->primaryKey(11),
            'offer_id' => $this->integer(11)->notNull(),
            'hash_name' => $this->string(60)->notNull(),
            'real_name' => $this->string(60)->notNull(),
            'extension' => $this->string(10)->notNull(),
            'created_at' => $this->dateTime(),
            'updated_at' => $this->dateTime(),
        ]);

        $this->addForeignKey('images_for_offer', 'offer_images', 'offer_id', 'offers', 'id');

    }

    public function down()
    {
        $this->dropForeignKey('images_for_offer', 'offer_images');
        $this->dropTable('offer_images');
        $this->dropForeignKey('user_offers', 'offers');
        $this->dropTable('offers');
        $this->dropTable('users');
    }

}
