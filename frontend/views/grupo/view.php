<?php

use yii\helpers\Html;
use common\components\Layout;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model frontend\models\Grupo */
/* @var $filiais \yii\data\ActiveDataProvider */

$this->title = $model->id . ' - '. $model->nome;
$this->params['breadcrumbs'][] = ['label' => 'Grupos', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="box">
    <div class="box-header">
        <h2><?= Html::encode($this->title) ?></h2>
    </div>

    <div class="box-body">
    <div class="row">
        <div class="col-md-2">
            <?= Html::button('Informações Gerais', [
                'id' => 'info-gerais',
                'class' => Layout::BTN_OPCOES_GRUPO
            ])?>

            <?= Html::button('Informações Jurídico', [
                'id' => 'info-juridico',
                'class' => Layout::BTN_OPCOES_GRUPO
            ])?>

            <?= Html::button('Filiais', [
                'id' => 'filiais',
                'class' => Layout::BTN_OPCOES_GRUPO
            ])?>

            <?= Html::button('Itens Contrato', [
                'id' => 'itens-contrato',
                'class' => Layout::BTN_OPCOES_GRUPO
            ])?>

            <hr style="margin-top: 60px; border-top: 1px solid #eee">
            <?= Html::a('Voltar', \yii\helpers\Url::to(['grupo/index']), [
                'class' => Layout::BTN_OPCOES_GRUPO
            ])?>

        </div>

        <div class="col-md-10 col-xs-8" id="conteudo" >

            <div class="collapse in anos" id="conteudoinfo-gerais">
                <div class="card card-block">
                    <?= $this->render('_info', [
                        'model' => $model,
                    ]) ?>
                </div>
            </div>

            <div class="collapse anos" id="conteudoinfo-juridico">
                <div class="card card-block">
                    <?= $this->render('_info-juridico', [
                        'model' => $model,
                    ]) ?>
                </div>
            </div>

            <div class="collapse anos" id="conteudofiliais">
                <div class="card card-block">
                    <?= $this->render('_filiais', [
                        'model' => $model,
                        'filiais' => $filiais
                    ]) ?>
                </div>
            </div>

            <div class="collapse anos" id="conteudoitens-contrato">
                <div class="card card-block">
                    <?= $this->render('_itens-contrato', [
                        'model' => $model,
                    ]) ?>
                </div>
            </div>
        </div>
    </div>
</div>
</div>

<?php

$this->registerJs(<<<JS

$(document).ready(function(){

	$(".btn").click(function(){
		$(".anos").slideUp(500);

		 $(".btn").removeClass("activerr");
		$("#"+$(this).attr('id')).addClass("activerr");

		$("#conteudo"+$(this).attr('id')).slideDown(500);
	});
});
	
JS
);
