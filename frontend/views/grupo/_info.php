<?php

use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model frontend\models\Grupo */

?>

<h3 class="box-title-grupo">Informações Gerais</h3>
<hr>
<p></p>
<p style="font-size: 18px">
    <span class="teste">Código corporativo <?= $model->id ?></span> <span class="teste">cliente <?= $model->nome ?></span> <span class="teste"> status <?= $model->status ?></span> <br>
    <span class="teste">gestor <?= $model->gestor->nome ?? null ?> </span> <span class="teste"> suporte <?= $model->suporte->nome ?? null?> </span> <br>
    <span class="teste">inicio contrato <?= $model->contrato->dataInicio ?> </span> <span class="teste"> reinicio XXXXXXXXXX</span> <span class="teste"> MB ponderada XXXXXXXXXX </span> <br>
    <span class="teste">data renovação XXXXXXXXXX </span> <span class="teste"> vencimento XXXXXXXXXX </span> <br>
    <span class="teste">rejuste ponderado XXXXXXXXXX</span> <span class="teste"> MB ponderada de renovação XXXXXXXXXX </span><br>

    <span class="teste">ICMS XXXXXXXXXX</span> <span class="teste"> tabela XXXXXXXXXX </span> <span class="teste">enquadramento XXXXXXXXXX </span><br>
    <span class="teste">cp XXXXXXXXXX</span> <span class="teste"> mínimo XXXXXXXXXX </span>
</p>

    <br><br><br>

    <table class="table">
        <tr>
            <td>Código Corporativo: <?= $model->id ?></td>
            <td>Cliente: <?= $model->nome ?></td>
            <td></td>
            <td></td>
        </tr>
        <tr>
            <td>Gestor: <?= $model->gestor->nome ?? null ?></td>
            <td>Suporte: <?= $model->suporte->nome ?? null ?></td>
            <td></td>
            <td></td>
        </tr>
        <tr>
            <td>Inicío Contrato: <?= Yii::$app->formatter->asDate($model->contrato->dataInicio, 'dd/MM/Y') ?? null ?></td>
            <td>Reinício: <?= Yii::$app->formatter->asDate($model->contrato->dataInicio, 'dd/MM/Y') ?? null ?></td>
            <td>MB Ponderada: <?= $model->contrato->margemBrutaPonderada ?? null ?></td>
            <td></td>
        </tr>
        <tr>
            <td>Data renovação: <?= Yii::$app->formatter->asDate($model->contrato->dataUltimaRenovacao, 'dd/MM/Y') ?? null ?></td>
            <td>Vencimento: <?= Yii::$app->formatter->asDate($model->contrato->vencimento, 'dd/MM/Y') ?? null ?></td>
            <td></td>
            <td></td>
        </tr
        <tr>
            <td>Reajuste ponderado: <?= $model->contrato->reajustePonderado ?? null ?></td>
            <td>MB ponderada de renovação: <?= $model->contrato->margemBrutaPonderadaRenovacao ?? null ?></td>
            <td></td>
            <td></td>
        </tr>
        <tr>
            <td>ICMS: <?= $model->contrato->icms ?? null ?></td>
            <td>Tabela: <?= $model->contrato->tabela ?? null ?></td>
            <td>Enquadramento: <?= $model->contrato->enquadramento ?? null ?></td>
            <td></td>
        </tr>
        <tr>
            <td>CP: <?= $model->contrato->condicaoPagamento ?? null ?></td>
            <td>Mínimo: <?= $model->contrato->minimo ?? null ?></td>
            <td></td>
            <td></td>
        </tr>
    </table>

<?php

$this->registerCss(<<<CSS

.teste {
    margin-right: 50px;
}
CSS
);