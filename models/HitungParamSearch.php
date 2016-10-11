<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\HitungParam;

/**
 * HitungParamSearch represents the model behind the search form about `app\models\HitungParam`.
 */
class HitungParamSearch extends HitungParam
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id_hitung_param', 'iterasi', 'id_alat'], 'integer'],
            [['kode_param', 'keterangan'], 'safe'],
            [['setting', 'baca'], 'number'],
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
        $query = HitungParam::find();

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
            'id_hitung_param' => $this->id_hitung_param,
            'setting' => $this->setting,
            'baca' => $this->baca,
            'iterasi' => $this->iterasi,
            'id_alat' => $this->id_alat,
        ]);

        $query->andFilterWhere(['like', 'kode_param', $this->kode_param])
            ->andFilterWhere(['like', 'keterangan', $this->keterangan]);

        return $dataProvider;
    }
}
