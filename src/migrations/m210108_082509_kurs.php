<?php

use yii\db\Migration;
use yii\db\Schema;
/**
 * Class m210108_082509_kurs
 */
class m210108_082509_kurs extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        return $this->createTable('kurs', [


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
        return $this->dropTable('kurs');
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m210108_082509_kurs cannot be reverted.\n";

        return false;
    }
    */
}
