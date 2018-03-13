<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "karyawan".
 *
 * @property int $id_karyawan
 * @property string $nama
 * @property int $nip
 * @property string $jabatan
 * @property string $id_golongan
 * @property string $alamat
 * @property int $kd_bagian
 * @property int $id_gaji
 */
class Karyawan extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'karyawan';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['nama', 'nip', 'jabatan', 'id_golongan', 'alamat', 'kd_bagian', 'id_gaji'], 'required'],
            [['nip', 'kd_bagian', 'id_gaji'], 'integer'],
            [['alamat'], 'string'],
            [['nama'], 'string', 'max' => 100],
            [['jabatan'], 'string', 'max' => 50],
            [['id_golongan'], 'string', 'max' => 20],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_karyawan' => 'Id Karyawan',
            'nama' => 'Nama',
            'nip' => 'Nip',
            'jabatan' => 'Jabatan',
            'id_golongan' => 'Id Golongan',
            'alamat' => 'Alamat',
            'kd_bagian' => 'Kd Bagian',
            'id_gaji' => 'Id Gaji',
        ];
    }
}
