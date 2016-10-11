<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "tbl_alat".
 *
 * @property integer $id_alat
 * @property integer $id_pekerjaan
 * @property string $nama_alat
 * @property string $merk
 * @property string $model
 * @property string $sn
 * @property string $kode_lembarkerja
 * @property string $suhu_awal
 * @property string $suhu_akhir
 * @property string $nisbi_awal
 * @property string $nisbi_akhir
 */
class TblAlat extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'tbl_alat';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id_pekerjaan'], 'integer'],
            [['suhu_awal', 'suhu_akhir', 'nisbi_awal', 'nisbi_akhir'], 'number'],
            [['nama_alat', 'merk', 'model', 'sn', 'kode_lembarkerja'], 'string', 'max' => 45],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id_alat' => 'Id Alat',
            'id_pekerjaan' => 'Id Pekerjaan',
            'nama_alat' => 'Nama Alat',
            'merk' => 'Merk',
            'model' => 'Model',
            'sn' => 'Sn',
            'kode_lembarkerja' => 'Kode Lembarkerja',
            'suhu_awal' => 'Suhu Awal',
            'suhu_akhir' => 'Suhu Akhir',
            'nisbi_awal' => 'Nisbi Awal',
            'nisbi_akhir' => 'Nisbi Akhir',
        ];
    }
}
