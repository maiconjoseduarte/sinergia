<?php

/* @var $this \yii\web\View */
/* @var $processamentosSucesso */
/* @var $processamentosErro */
?>

<div class="box">
    <div class="box-header">
        <i class="fa fa-asterisk"></i>
        <h3 class="box-title"><strong>Resultado</strong></h3>
    </div>
    <div class="box-body">

        <div class="row">
            <div class="col-xs-12 col-md-6 col-lg-6">
                <div class="small-box bg-green">
                    <div class="inner">
                        <h3><?= $processamentosSucesso; ?></h3>
                        <p>Processamento(s) efetuados com sucesso.</p>
                    </div>
                    <div class="icon">
                        <i class="fa fa-check"></i>
                    </div>
                </div>
            </div>
            <div class="col-xs-12 col-md-6 col-lg-6">
                <div class="small-box bg-red">
                    <div class="inner">
                        <h3><?= $processamentosErro; ?></h3>
                        <p>Processamento(s) possui(em) erro(s).</p>
                    </div>
                    <div class="icon">
                        <i class="fa fa-warning"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
