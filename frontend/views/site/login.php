<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model \common\models\LoginForm */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;

$this->title = 'Login';
$this->params['breadcrumbs'][] = $this->title;
?>

<div class="login-content">
    <div class="login-header ">
        <h3><strong>Entrar</strong></h3>
    </div>
    <div class="login-body">

        <?php $form = ActiveForm::begin(['id' => 'login-form']); ?>

        <div class="form-group ">
            <div class="pos-r">
                <?php echo $form->field($model, 'username')->textInput(['autofocus' => true, 'placeholder' => 'Username'])->label('') ?>
            </div>
        </div>
        <div class="form-group">
            <div class="pos-r">
                <?= $form->field($model, 'password')->passwordInput( ['placeholder' => 'Password'])->label('') ?>
            </div>
        </div>
        <div class="form-group text-right">
            <a href="#" class="bold"> Forgot password?</a>
        </div>

        <div class="form-group">
            <?= Html::submitButton('Login', ['class' => 'btn btn-primary form-control']) ?>
        </div>
        <?php ActiveForm::end(); ?>

    </div>
</div>
<div class="login-footer text-center template">
    <h5>Não tem uma conta? <?= Html::a(' Criar uma', \yii\helpers\Url::to(['/site/signup'])) ?> </h5>
</div>