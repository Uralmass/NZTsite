<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "material".
 *
 * @property int $id
 * @property int|null $type
 * @property string|null $title
 * @property string|null $author
 * @property string|null $description
 * @property int|null $category
 */
class Material extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'material';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['type', 'category'], 'string'],
            [['description'], 'string'],
            [['title', 'author'], 'string', 'max' => 255],
            [['title', 'author','description'], 'required']
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'id',
            'type' => 'Тип',
            'title' => 'Название',
            'author' => 'Автор',
            'description' => 'Описание',
            'category' => 'Категория',
        ];
    }

    public function getCategory ()
    {
        return $this->hasOne(Category::class,['id'=>'category']);
    }


}
