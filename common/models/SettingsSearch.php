<?php

namespace common\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use common\models\Settings;

/**
 * SettingsSearch represents the model behind the search form of `common\models\Settings`.
 */
class SettingsSearch extends Settings
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id'], 'integer'],
            [['for_code', 'fb_link', 'telegram_link', 'google_analitycs', 'fb_pixel', 'email', 'text_for_privacy_policy', 'link_for_messenger', 'pixel_for_success'], 'safe'],
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
        $query = Settings::find();

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

        $query->andFilterWhere(['like', 'for_code', $this->for_code])
            ->andFilterWhere(['like', 'fb_link', $this->fb_link])
            ->andFilterWhere(['like', 'telegram_link', $this->telegram_link])
            ->andFilterWhere(['like', 'google_analitycs', $this->google_analitycs])
            ->andFilterWhere(['like', 'fb_pixel', $this->fb_pixel])
            ->andFilterWhere(['like', 'email', $this->email])
            ->andFilterWhere(['like', 'text_for_privacy_policy', $this->text_for_privacy_policy])
            ->andFilterWhere(['like', 'pixel_for_success', $this->pixel_for_success])
            ->andFilterWhere(['like', 'link_for_messenger', $this->link_for_messenger]);

        return $dataProvider;
    }
}
