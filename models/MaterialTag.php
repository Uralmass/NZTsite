<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "material_tag".
 *
 * @property int $id
 * @property int|null $material_id
 * @property int|null $tag_id
 */
class MaterialTag extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'material_tag';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['material_id', 'tag_id'], 'integer'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'material_id' => 'Material ID',
            'tag_id' => 'Tag ID',
        ];
    }
}
