<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%material}}`.
 */
class m220704_100235_create_material_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%material}}', [

            'id' => $this->primaryKey(),
            'type'=>$this->string(),
            'title'=>$this->string(),
            'author'=>$this->string(),
            'description'=>$this->text(),
            'category'=>$this->string(),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%material}}');
    }
}
