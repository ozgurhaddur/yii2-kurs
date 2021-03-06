<?php

namespace ozgurhaddur\kurs\models;

use Yii;

/**
 * This is the model class for table "kurs".
 *
 * @property int $id
 * @property string|null $name
 * @property string|null $course_id
 * @property string|null $course_note
 * @property string|null $created_at
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
            [['created_at'], 'safe'],
            [['name', 'course_id', 'course_note'], 'string', 'max' => 255],
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
            'course_id' => 'Course ID',
            'course_note' => 'Course Note',
            'created_at' => 'Created At',
        ];
    }
}
