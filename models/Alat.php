<?php

namespace app\models;

use Yii;
use app\models\HitungParam;

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
 * @property string $no_label
 */
class Alat extends \yii\db\ActiveRecord
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
            [['nama_alat', 'merk', 'model', 'sn', 'kode_lembarkerja', 'no_label'], 'string', 'max' => 45],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id_alat' => 'Id Alat',
            'id_pekerjaan' => 'foreign key untuk tabel pekerjaan',
            'nama_alat' => 'Nama Alat',
            'merk' => 'Merk Alat',
            'model' => 'Tipe Alat',
            'sn' => 'Serial Number',
            'kode_lembarkerja' => 'Kode Lembarkerja',
            'suhu_awal' => 'Suhu Awal',
            'suhu_akhir' => 'Suhu Akhir',
            'nisbi_awal' => 'Nisbi Awal',
            'nisbi_akhir' => 'Nisbi Akhir',
            'no_label' => 'nomor label',
        ];
    }

    /**
     * Declaring relation with app\models\HitungParam
     * @return yii\db\ActiveQueryInterface
     */
    public function getDaftarHitungParam()
    {
        return $this->hasMany(HitungParam::classname(), ['id_alat' => 'id_alat']);
    }
}
