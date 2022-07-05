<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%material_tag}}`.
 */
class m220703_130027_create_material_tag_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%material_tag}}', [
            'id' => $this->primaryKey(),
            'material_id' => $this->integer(),
            'tag_id' => $this->integer()
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%material_tag}}');
    }
}
