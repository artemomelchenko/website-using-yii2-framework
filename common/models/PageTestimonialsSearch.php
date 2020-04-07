<?php

namespace common\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use common\models\PageTestimonials;

/**
 * PageTestimonialsSearch represents the model behind the search form of `common\models\PageTestimonials`.
 */
class PageTestimonialsSearch extends PageTestimonials
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id'], 'integer'],
            [['contact_us_text', 'for_fb_pixel', 'other_code'], 'safe'],
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
        $query = PageTestimonials::find();

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
        ]);

        $query->andFilterWhere(['like', 'contact_us_text', $this->contact_us_text])
            ->andFilterWhere(['like', 'for_fb_pixel', $this->for_fb_pixel])
            ->andFilterWhere(['like', 'other_code', $this->other_code]);

        return $dataProvider;
    }
}
