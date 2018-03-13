<?php

namespace app\controllers;

use Yii;
use yii\web\Controller;

class RekapController extends Controller {
  public function actionIndex()
  {
    $query = Yii::$app->db->createCommand(" SELECT karyawan.nama, karyawan.nip, karyawan.jabatan, gaji.golongan, bagian.nama_bagian, karyawan.alamat, gaji.gaji_pokok, gaji.tunjangan
FROM karyawan
JOIN bagian ON karyawan.kd_bagian = bagian.kd_bagian
JOIN gaji ON karyawan.id_golongan = gaji.id_golongan") //Masukkan QUERY
    ->queryAll();

    return $this->render('index', [
      'query' => $query
    ]);
  }
}