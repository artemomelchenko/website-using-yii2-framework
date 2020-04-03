<?php

namespace common\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use common\models\Testimonials;

/**
 * TestimonialsSearch represents the model behind the search form of `common\models\Testimonials`.
 */
class TestimonialsSearch extends Testimonials
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'accepted', 'created'], 'integer'],
            [['name', 'email', 'img', 'message', 'date_create'], 'safe'],
        ];
    }

    /**
     * {@inheritdoc}
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
        $query = Testimonials::find();

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
            'accepted' => $this->accepted,
            'created' => $this->created,
            'date_create' => $this->date_create,
        ]);

        $query->andFilterWhere(['like', 'name', $this->name])
            ->andFilterWhere(['like', 'email', $this->email])
            ->andFilterWhere(['like', 'img', $this->img])
            ->andFilterWhere(['like', 'message', $this->message]);

        return $dataProvider;
    }
}
