<?php
use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model \common\models\LoginForm */
$this->title = 'Sign In';
$fieldOptions1 = [
    'options' => ['class' => 'form-group has-feedback'],
    'inputTemplate' => "{input}<span class='glyphicon glyphicon-envelope form-control-feedback'></span>"
];
$fieldOptions2 = [
    'options' => ['class' => 'form-group has-feedback'],
    'inputTemplate' => "{input}<span class='glyphicon glyphicon-lock form-control-feedback'></span>"
];
?>

<div class="login-box">
  <div class="login-logo">
    <a href="#"><b>Admin</b> Panel</a>
  </div>
  <!-- /.login-logo -->
  <div class="login-box-body">
    <p class="login-box-msg">後台管理中心</p>

    <?php $form = ActiveForm::begin(['id' => 'login-form', 'enableClientValidation' => false]); ?>

    <?= $form
      ->field($model, 'username', $fieldOptions1)
      ->label(false)
      ->textInput(['placeholder' => '帳號']) ?>

    <?= $form
      ->field($model, 'password', $fieldOptions2)
      ->label(false)
      ->passwordInput(['placeholder' => '密碼']) ?>

    <div class="row">
      <div class="col-xs-8">
        <div class="checkbox icheck">
		      <label>
		        <input type="checkbox"> 記住登入帳號
		      </label>
		    </div>
      </div>
      <!-- /.col -->
      <div class="col-xs-4">
        <?= Html::submitButton('登入', ['class' => 'btn btn-primary btn-block btn-flat', 'name' => 'login-button']) ?>
      </div>
      <!-- /.col -->
    </div>

    <?php ActiveForm::end(); ?>

  </div>
  <!-- /.login-box-body -->
</div><!-- /.login-box -->

<?php
$this->registerJs("

	$(function () {
    
    // Remember Me checkbox style
    $('input').iCheck({
      checkboxClass: 'icheckbox_square-blue',
      radioClass: 'iradio_square-blue',
      increaseArea: '20%' // optional
    });

    // Auto-focus
    $('input[type=text]').first().focus();
  });

", $this::POS_END );
?>