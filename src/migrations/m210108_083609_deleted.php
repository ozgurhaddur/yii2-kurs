<?php

use yii\db\Migration;
use yii\db\Schema;
/**
 * Class m210108_083609_deleted
 */
class m210108_083609_deleted extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        return $this->createTable('deleted', [


            'id' => Schema::TYPE_PK,
            // $this->primaryKey()
            'name' => Schema::TYPE_STRING,
            'course_id' => Schema::TYPE_STRING,
            // $this->string(255) // String with 255 characters
            'course_note' => Schema::TYPE_STRING,
            'created_at' => Schema::TYPE_DATETIME,
            // $this->integer()
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        return $this->dropTable('deleted');
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m210108_083609_deleted cannot be reverted.\n";

        return false;
    }
    */
}
