<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "bagian".
 *
 * @property int $kd_bagian
 * @property string $nama_bagian
 */
class Bagian extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'bagian';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['nama_bagian'], 'required'],
            [['nama_bagian'], 'string', 'max' => 50],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'kd_bagian' => 'Kd Bagian',
            'nama_bagian' => 'Nama Bagian',
        ];
    }
}
