<?php

namespace backend\modules\kurs\models;

use Yii;

/**
 * This is the model class for table "kurs".
 *
 * @property int $id
 * @property string|null $name
 * @property string|null $password
 * @property string|null $type
 * @property string|null $created_at
 * @property string|null $updated_at
 */
class Kurs extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'kurs';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['created_at', 'updated_at'], 'safe'],
            [['name', 'password', 'type'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Name',
            'password' => 'Password',
            'type' => 'Type',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
        ];
    }
}
