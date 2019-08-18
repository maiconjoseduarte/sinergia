<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model \frontend\models\SignupForm */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;

$this->title = 'Signup';
$this->params['breadcrumbs'][] = $this->title;
?>

<div class="register-box-body">
    <p class="login-box-msg">Register a new membership</p>

    <?php $form = ActiveForm::begin(['id' => 'form-signup']); ?>
        <div class="form-group has-feedback">
            <?php echo $form->field($model, 'username')->textInput(['autofocus' => true, 'placeholder' => 'Username'])->label('') ?>
        </div>
        <div class="form-group has-feedback" style="margin-top: -20px">
            <?php echo $form->field($model, 'email')->textInput(['autofocus' => true, 'placeholder' => 'E-mail'])->label('') ?>
        </div>
        <div class="form-group has-feedback" style="margin-top: -20px">
            <?= $form->field($model, 'password')->passwordInput( ['placeholder' => 'Password'])->label('') ?>
        </div>
        <div class="row">
            <div class="col-xs-8">
            </div>
            <!-- /.col -->
            <div class="col-xs-4">
                <?= Html::submitButton('Cadastrar', ['class' => 'btn btn-primary form-control']) ?>
            </div>
            <!-- /.col -->
        </div>
    <?php ActiveForm::end(); ?>

    <div class="social-auth-links text-center">
        <a href="#" class="btn btn-block btn-social btn-facebook btn-flat"><i class="fa fa-facebook"></i> Sign up using
            Facebook</a>
        <a href="#" class="btn btn-block btn-social btn-google btn-flat"><i class="fa fa-google-plus"></i> Sign up using
            Google+</a>
    </div>

    <?= Html::a('Fazer Login', \yii\helpers\Url::to(['/site/login'])) ?>