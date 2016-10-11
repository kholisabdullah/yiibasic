<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\TblAlat;

/**
 * TblAlatSearch represents the model behind the search form about `app\models\TblAlat`.
 */
class TblAlatSearch extends TblAlat
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id_alat', 'id_pekerjaan'], 'integer'],
            [['nama_alat', 'merk', 'model', 'sn', 'kode_lembarkerja'], 'safe'],
            [['suhu_awal', 'suhu_akhir', 'nisbi_awal', 'nisbi_akhir'], 'number'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function scenarios()
    {
        // bypass scenarios() implementation in the parent class
        return Model::scenarios();
    }

    /**
     * Creates data provider instance with search query applied
     *
     * @param array $params
     *
     * @return ActiveDataProvider
     */
    public function search($params)
    {
        $query = TblAlat::find();

        // add conditions that should always apply here

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        // grid filtering conditions
        $query->andFilterWhere([
            'id_alat' => $this->id_alat,
            'id_pekerjaan' => $this->id_pekerjaan,
            'suhu_awal' => $this->suhu_awal,
            'suhu_akhir' => $this->suhu_akhir,
            'nisbi_awal' => $this->nisbi_awal,
            'nisbi_akhir' => $this->nisbi_akhir,
        ]);

        $query->andFilterWhere(['like', 'nama_alat', $this->nama_alat])
            ->andFilterWhere(['like', 'merk', $this->merk])
            ->andFilterWhere(['like', 'model', $this->model])
            ->andFilterWhere(['like', 'sn', $this->sn])
            ->andFilterWhere(['like', 'kode_lembarkerja', $this->kode_lembarkerja]);

        return $dataProvider;
    }
}
