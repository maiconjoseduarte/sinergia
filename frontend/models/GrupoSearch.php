<?php

namespace frontend\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use frontend\models\Grupo;

/**
 * GrupoSearch represents the model behind the search form of `frontend\models\Grupo`.
 */
class GrupoSearch extends Grupo
{
    public $pageSize = 20;

    public static $OPCOES_PAGINACAO = [20 => '20 resultados', 50 => '50 resultados', 100 => '100 resultados'];

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id'], 'integer'],
            [['nome', 'status', 'idGestor', 'idSuporte'], 'safe'],
            ['pageSize', 'in', 'range' => array_keys(self::$OPCOES_PAGINACAO)],
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
     * @return array
     */
    public function attributeLabels()
    {
        return [
            'pageSize' => 'Paginação',
        ];
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
        $query = Grupo::find();
        $this->load($params);

        // add conditions that should always apply here

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
            'pagination' => ['pageSize' => $this->pageSize]
        ]);


        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        // grid filtering conditions
        $query->andFilterWhere([
            'id' => $this->id,
            'status' => $this->status,
            'idGestor' => $this->idGestor,
            'idSuporte' => $this->idSuporte
        ]);

        $query->andFilterWhere(['like', 'nome', $this->nome]);

        return $dataProvider;
    }
}
