<?php

namespace frontend\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use frontend\models\Filial;

/**
 * FilialSearch represents the model behind the search form of `frontend\models\Filial`.
 */
class FilialSearch extends Filial
{
    public $pageSize = 20;

    public static $OPCOES_PAGINACAO = [20 => '20 resultados', 50 => '50 resultados', 100 => '100 resultados'];

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'idGrupo', 'codIsoWeb', 'codResponsavel', 'codSuporte', 'icms', 'ledTime'], 'integer'],
            [['nome', 'documento', 'uf', 'especialidade', 'cdFaturamento', 'nomeCidade', 'create_at', 'update_at'], 'safe'],
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
        $query = Filial::find();
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
            'idGrupo' => $this->idGrupo,
            'codIsoWeb' => $this->codIsoWeb,
            'codResponsavel' => $this->codResponsavel,
            'codSuporte' => $this->codSuporte,
            'icms' => $this->icms,
            'ledTime' => $this->ledTime,
            'create_at' => $this->create_at,
            'update_at' => $this->update_at,
        ]);

        $query->andFilterWhere(['like', 'nome', $this->nome])
            ->andFilterWhere(['like', 'documento', $this->documento])
            ->andFilterWhere(['like', 'uf', $this->uf])
            ->andFilterWhere(['like', 'nomeCidade', $this->nomeCidade])
            ->andFilterWhere(['like', 'especialidade', $this->especialidade])
            ->andFilterWhere(['like', 'cdFaturamento', $this->cdFaturamento]);

        return $dataProvider;
    }
}
