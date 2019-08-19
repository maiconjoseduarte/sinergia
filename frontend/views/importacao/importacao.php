<?php

use frontend\models\Importacao;
use common\components\Icones;
use kartik\widgets\FileInput;
use kartik\widgets\Select2;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\web\JsExpression;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $importacao Importacao */

$this->title = 'Importação';
?>

<div class="box">
    <div class="box-header">
        <i class="fa fa-download"></i>
        <h3 class="box-title"><strong><?= Html::encode($this->title); ?></strong></h3>
    </div>
    <div class="box-body">
        <?php $form = ActiveForm::begin(['options' => ['enctype' => 'multipart/form-data', 'autocomplete' => 'off']]); ?>

        <div class="row">
            <div class="col-sm-12 col-md-6 col-lg-6">
<!--                --><?php //$form->field($importacao, 'idAdministradora')->widget(Select2::classname(), [
//                    'initValueText' => $importacao->administradora->nome ?? null,
//                    'options' => ['placeholder' => 'Selecione uma administradora'],
//                    'pluginOptions' => [
//                        'allowClear' => true,
//                        'minimumInputLength' => 1,
//                        'ajax' => [
//                            'url' => Url::to(['/app/importacao/list-administradoras']),
//                            'dataType' => 'json',
//                            'delay' => 400,
//                            'data' => new JsExpression('function(params) { return {query: params.term}; }'),
//                            'cache' => true
//                        ],
//                        'escapeMarkup' => new JsExpression('function (markup) { return markup; }'),
//                        'templateResult' => new JsExpression('function(administradora) { return administradora.text; }'),
//                        'templateSelection' => new JsExpression('function (administradora) { return administradora.text; }'),
//                    ],
//                ]);
                ?>
            </div>
<!--            --><?php
//                if (
//                        $importacao instanceof ImportacaoUnidade ||
//                        $importacao instanceof ImportacaoInadimplentes ||
//                        $importacao instanceof ImportacaoUnidadeMorador ||
//                        $importacao instanceof \backend\models\ImportacaoAcordo
//                ):
//            ?>
            <div class="col-sm-12 col-md-6 col-lg-6">
                <?php

//                $administradoraField = Html::getInputId($importacao, 'idAdministradora');
//                echo $form->field($importacao, 'idCondominio')->widget(Select2::classname(), [
//                    'initValueText' => $importacao->condominio->nome ?? null,
//                    'options' => ['placeholder' => 'Selecione um condomínio'],
//                    'pluginOptions' => [
//                        'allowClear' => true,
//                        'minimumInputLength' => 1,
//                        'ajax' => [
//                            'url' => Url::to(['/app/importacao/list-condominios']),
//                            'dataType' => 'json',
//                            'delay' => 400,
//                            'data' => new JsExpression("function(params) { return {query: params.term, administradora: jQuery('#{$administradoraField}').val()}; }"),
//                            'cache' => true
//                        ],
//                        'escapeMarkup' => new JsExpression('function (markup) { return markup; }'),
//                        'templateResult' => new JsExpression('function(condominio) { return condominio.text; }'),
//                        'templateSelection' => new JsExpression('function (condominio) { return condominio.text; }'),
//                    ],
//                ]);
//                ?>
            </div>
            <?php
//                endif;
            ?>
        </div>

        <div class="row">
            <div class="col-sm-12 col-md-6 col-lg-6">
                <?= $form->field($importacao, 'formatacaoTexto')->dropDownList([
                    Importacao::IMPORTACAO_TEXTO_FORMATACAO_ORIGINAL => 'Original',
                    Importacao::IMPORTACAO_TEXTO_FORMATACAO_PRIMEIRA_LETRA_MAIUSCULA => 'Primeira letra maiúscula'
                ]); ?>
            </div>
            <div class="sm-12 col-md-6 col-lg-6">
                <?= $form->field($importacao, 'arquivo')->widget(FileInput::classname(), [
                    'pluginOptions' => [
                        'showPreview' => false,
                        'showCaption' => true,
                        'showUpload' => false,
                        'showRemove' => true,
                        'browseLabel' => 'Selecionar ...',
                        'browseIcon' => Html::tag('i', null, ['class' => Icones::FILE]),
                        'removeLabel' => '',
                    ],
                ]); ?>
            </div>
        </div>

        <div class="row">
            <div class="col-sm-12 col-md-6 col-lg-6">
                <?= $form->field($importacao, 'continuarProcessamento')->checkbox(['label' => 'Não interromper importação com erros.']); ?>
            </div>
            <?php if (property_exists($importacao, 'somarSaldoInicial')): ?>
            <div class="col-sm-12 col-md-6 col-lg-6">
                <?= $form->field($importacao, 'somarSaldoInicial')->checkbox(['label' => 'Somar valores no saldo inicial.']); ?>
            </div>
            <?php endif; ?>
        </div>

        <?= Html::submitButton('Processar', ['class' => 'btn btn-success']) ?>

        <?php ActiveForm::end(); ?>
    </div>
</div>

<?php

if (Yii::$app->request->isPost) {
    echo $this->render('resultado',
        [
            'processamentosSucesso' => count($importacao->processamentosSucesso),
            'processamentosErro' => count($importacao->processamentosErro)
        ]
    );
    echo $this->render('grid-erros',
        [
            'processamentos' => $importacao->processamentosErro,
            'titulo' => 'Processamentos com erro.',
            'estiloBox' => 'box-danger'
        ]
    );

    if (property_exists($importacao, 'processamentosSucesso') && empty($importacao->processamentosSucesso) === false) {
        echo $this->render('grid-erros',
            [
                'processamentos' => $importacao->processamentosSucesso,
                'titulo' => 'Processamentos com sucesso.',
                'estiloBox' => 'box-success'
            ]
        );
    }

    if (property_exists($importacao, 'processamentosIgnorado')) {
        echo $this->render('grid-erros',
            [
                'processamentos' => $importacao->processamentosIgnorado,
                'titulo' => 'Processamentos ignorados.',
                'estiloBox' => 'box-warning'
            ]
        );
    }
}
