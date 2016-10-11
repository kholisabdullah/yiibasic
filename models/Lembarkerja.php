<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "tbl_lembarkerja".
 *
 * @property integer $id_lembarkerja
 * @property string $nama_lembarkerja
 * @property string $kode_lembarkerja
 * @property string $kode_param1
 * @property string $kode_param2
 * @property string $kode_param3
 * @property string $kode_param4
 * @property string $kode_param5
 * @property string $kode_param6
 * @property string $kode_param7
 * @property string $kode_param8
 * @property string $kode_param9
 * @property integer $id_kalibrator
 */
class Lembarkerja extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'tbl_lembarkerja';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id_kalibrator'], 'integer'],
            [['nama_lembarkerja'], 'string', 'max' => 40],
            [['kode_lembarkerja'], 'string', 'max' => 10],
            [['kode_param1', 'kode_param2', 'kode_param3', 'kode_param4', 'kode_param5', 'kode_param6', 'kode_param7', 'kode_param8', 'kode_param9'], 'string', 'max' => 4],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id_lembarkerja' => 'Id Lembarkerja',
            'nama_lembarkerja' => 'Nama Lembarkerja',
            'kode_lembarkerja' => 'Kode Lembarkerja',
            'kode_param1' => 'Kode Param1',
            'kode_param2' => 'Kode Param2',
            'kode_param3' => 'Kode Param3',
            'kode_param4' => 'Kode Param4',
            'kode_param5' => 'Kode Param5',
            'kode_param6' => 'Kode Param6',
            'kode_param7' => 'Kode Param7',
            'kode_param8' => 'Kode Param8',
            'kode_param9' => 'Kode Param9',
            'id_kalibrator' => 'Id Kalibrator',
        ];
    }
}
