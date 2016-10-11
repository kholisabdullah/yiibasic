<?php

namespace app\models;

use Yii;

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
            'kode_param' => 'Kode Parameter',
            'setting' => 'Setting',
            'baca' => 'Baca',
            'iterasi' => 'Iterasi',
            'keterangan' => 'Keterangan',
            'id_alat' => 'Id Alat',
        ];
    }
}
