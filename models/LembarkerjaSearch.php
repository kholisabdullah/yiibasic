<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Lembarkerja;

/**
 * LembarkerjaSearch represents the model behind the search form about `app\models\Lembarkerja`.
 */
class LembarkerjaSearch extends Lembarkerja
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id_lembarkerja', 'id_kalibrator'], 'integer'],
            [['nama_lembarkerja', 'kode_lembarkerja', 'kode_param1', 'kode_param2', 'kode_param3', 'kode_param4', 'kode_param5', 'kode_param6', 'kode_param7', 'kode_param8', 'kode_param9'], 'safe'],
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
        $query = Lembarkerja::find();

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
            'id_lembarkerja' => $this->id_lembarkerja,
            'id_kalibrator' => $this->id_kalibrator,
        ]);

        $query->andFilterWhere(['like', 'nama_lembarkerja', $this->nama_lembarkerja])
            ->andFilterWhere(['like', 'kode_lembarkerja', $this->kode_lembarkerja])
            ->andFilterWhere(['like', 'kode_param1', $this->kode_param1])
            ->andFilterWhere(['like', 'kode_param2', $this->kode_param2])
            ->andFilterWhere(['like', 'kode_param3', $this->kode_param3])
            ->andFilterWhere(['like', 'kode_param4', $this->kode_param4])
            ->andFilterWhere(['like', 'kode_param5', $this->kode_param5])
            ->andFilterWhere(['like', 'kode_param6', $this->kode_param6])
            ->andFilterWhere(['like', 'kode_param7', $this->kode_param7])
            ->andFilterWhere(['like', 'kode_param8', $this->kode_param8])
            ->andFilterWhere(['like', 'kode_param9', $this->kode_param9]);

        return $dataProvider;
    }
}
