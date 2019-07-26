<?php

namespace frontend\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use frontend\models\Juridico;

/**
 * JuridicoSearch represents the model behind the search form of `frontend\models\Juridico`.
 */
class JuridicoSearch extends Juridico
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'idGrupo'], 'integer'],
            [['status', 'dataInicio', 'dataUltimaRenovacao', 'vencimento', 'minutaAditivo', 'statusAtual', 'comentario', 'nomeResponsavel', 'email', 'telefone', 'create_at', 'update_at'], 'safe'],
            [['multa', 'juros'], 'number'],
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
        $query = Juridico::find();

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
            'idGrupo' => $this->idGrupo,
            'dataInicio' => $this->dataInicio,
            'dataUltimaRenovacao' => $this->dataUltimaRenovacao,
            'vencimento' => $this->vencimento,
            'multa' => $this->multa,
            'juros' => $this->juros,
            'create_at' => $this->create_at,
            'update_at' => $this->update_at,
        ]);

        $query->andFilterWhere(['like', 'status', $this->status])
            ->andFilterWhere(['like', 'minutaAditivo', $this->minutaAditivo])
            ->andFilterWhere(['like', 'statusAtual', $this->statusAtual])
            ->andFilterWhere(['like', 'comentario', $this->comentario])
            ->andFilterWhere(['like', 'nomeResponsavel', $this->nomeResponsavel])
            ->andFilterWhere(['like', 'email', $this->email])
            ->andFilterWhere(['like', 'telefone', $this->telefone]);

        return $dataProvider;
    }
}
