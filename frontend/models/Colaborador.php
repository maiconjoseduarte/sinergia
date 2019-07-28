<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "Colaborador".
 *
 * @property int $id
 * @property string $nome
 * @property string $cargo
 */
class Colaborador extends \yii\db\ActiveRecord
{

    const GESTOR = 1;
    const SUPORTE = 2;

    public static $OPCOES_CARGO = [
        self::GESTOR => 'Gestor',
        self::SUPORTE => 'Suporte',
    ];

    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'Colaborador';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id'], 'required'],
            [['id', 'cargo'], 'integer'],
            [['id'], 'unique'],
            [['nome'], 'string', 'max' => 255],
            [['cargo'], 'in', 'range' => array_keys(self::$OPCOES_CARGO)]
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'nome' => 'Nome',
            'cargo' => 'Cargo',
        ];
    }

    static public function select2Data($cargo = false)
    {
        $results = [];

        $colaboradores = self::find();

        if ($cargo) {
            $colaboradores = $colaboradores->andWhere(['cargo' => $cargo]);
        }

        $colaboradores = $colaboradores->all();

        /** @var Colaborador[] $colaboradores */
        if ($colaboradores != null) {
            foreach ($colaboradores as $colaborador) {
                $results[$colaborador->id] = "{$colaborador->id} - {$colaborador->nome}";
            }
        }

        return $results;
    }
}
