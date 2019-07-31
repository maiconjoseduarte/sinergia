<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model \frontend\models\SignupForm */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;

$this->title = 'Signup';
$this->params['breadcrumbs'][] = $this->title;
?>

<div class="login-content">
    <div class="login-header ">
        <h3><strong>Criar Nova Conta</strong></h3>
    </div>
    <div class="login-body">

        <?php $form = ActiveForm::begin(['id' => 'form-signup']); ?>

        <div class="form-group ">
            <div class="pos-r">
                <?php echo $form->field($model, 'username')->textInput(['autofocus' => true, 'placeholder' => 'Username'])->label('') ?>
            </div>
        </div>
        <div class="form-group ">
            <div class="pos-r">
                <?php echo $form->field($model, 'email')->textInput(['autofocus' => true, 'placeholder' => 'E-mail'])->label('') ?>
            </div>
        </div>
        <div class="form-group">
            <div class="pos-r">
                <?= $form->field($model, 'password')->passwordInput( ['placeholder' => 'Password'])->label('') ?>
            </div>
        </div>

        <div class="form-group">
            <br>
            <?= Html::submitButton('Cadastrar', ['class' => 'btn btn-primary form-control']) ?>
        </div>
        <?php ActiveForm::end(); ?>

    </div>
</div>
<div class="login-footer text-center template">
    <h5>Fazer <?= Html::a(' Login', \yii\helpers\Url::to(['/site/login'])) ?> </h5>
</div>