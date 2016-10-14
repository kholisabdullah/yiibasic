<?php

namespace app\models;

use Yii;
use app\models\Alat;

/**
 * This is the model class for table "tbl_hitung_param".
 *
 * @property integer $id_hitung_param
 * @property string $kode_param
 * @property string $setting
 * @property string $baca
 * @property integer $iterasi
 * @property string $keterangan
 * @property integer $id_alat
 */
class HitungParam extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'tbl_hitung_param';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['setting', 'baca'], 'number'],
            [['iterasi', 'id_alat'], 'integer'],
            [['kode_param'], 'string', 'max' => 4],
            [['keterangan'], 'string', 'max' => 50],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id_hitung_param' => 'Id Hitung Param',
            'kode_param' => 'kode param dari tabel parameter',
            'setting' => 'settingan di alat',
            'baca' => 'pembacaan di alat',
            'iterasi' => 'pengulangan',
            'keterangan' => 'Keterangan',
            'id_alat' => 'foreign key untuk table alat',
        ];
    }

    /**
     * Declaring relation with app\models\Alat
     * @return yii\db\ActiveQueryInterface
     */
    public function getAlat()
    {
        return $this->hasOne(Alat::classname(), ['id_alat' => 'id_alat']);
    }
}
