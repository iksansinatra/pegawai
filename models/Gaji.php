<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "gaji".
 *
 * @property int $id_golongan
 * @property int $gaji_pokok
 * @property int $tunjangan
 * @property int $golongan
 */
class Gaji extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'gaji';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['gaji_pokok', 'tunjangan', 'golongan'], 'required'],
            [['gaji_pokok', 'tunjangan', 'golongan'], 'integer'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_golongan' => 'Id Golongan',
            'gaji_pokok' => 'Gaji Pokok',
            'tunjangan' => 'Tunjangan',
            'golongan' => 'Golongan',
        ];
    }
}
