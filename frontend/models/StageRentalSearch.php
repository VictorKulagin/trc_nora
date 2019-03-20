<?php

namespace frontend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use frontend\models\StageRental;

/**
 * StageRentalSearch represents the model behind the search form about `frontend\models\StageRental`.
 */
class StageRentalSearch extends StageRental
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'status'], 'integer'],
            [['name', 'phone', 'email', 'number_participants', 'description', /*'date',*/ 'time_start', 'time_end'], 'safe'],
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
        $query = StageRental::find();

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
            'id' => $this->id,
            'status' => $this->status,
        ]);

        $query->andFilterWhere(['like', 'name', $this->name])
            ->andFilterWhere(['like', 'phone', $this->phone])
            ->andFilterWhere(['like', 'email', $this->email])
            ->andFilterWhere(['like', 'number_participants', $this->number_participants])
            ->andFilterWhere(['like', 'description', $this->description])
            /*->andFilterWhere(['like', 'date', $this->date])*/
//            ->andFilterWhere(['like', 'time_start', $this->time_start])
//            ->andFilterWhere(['like', 'time_end', $this->time_end])
        ;

        return $dataProvider;
    }
}
