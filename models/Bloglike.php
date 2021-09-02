<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "bloglike".
 *
 * @property int $b_id
 * @property int $u_id
 * @property int $type
 * @property int $created_at
 */
class Bloglike extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'bloglike';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['b_id', 'u_id', 'type', 'created_at'], 'required'],
            [['b_id', 'u_id', 'type', 'created_at'], 'integer'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'b_id' => 'B ID',
            'u_id' => 'U ID',
            'type' => 'Type',
            'created_at' => 'Created At',
        ];
    }
}
