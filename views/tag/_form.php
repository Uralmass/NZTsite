<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Tag */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="container">

    <?php $form = ActiveForm::begin(); ?>

    <h1 class="my-md-5 my-4">Добавить тег</h1>
    <div class="row">
        <div class="col-lg-5 col-md-8">
            <form>
                <div class="form-floating mb-3">
                    <?= $form->field($model, 'title')->label(false)->textInput([
                            'placeholder'=>"Название",
                            'maxlength' => true]) ?>
                    <div class="invalid-feedback">
                        Пожалуйста, заполните поле
                    </div>
                </div>
                <?= Html::submitButton('Добавить', ['class' => 'btn btn-primary']) ?>
            </form>
        </div>
    </div>

    <?php ActiveForm::end(); ?>
</div>
