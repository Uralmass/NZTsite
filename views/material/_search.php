<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\MaterialSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="material-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'title') ?>

    <?php // echo $form->field($model, 'category') ?>

    <div class="input-group mb-3" >

        <?= Html::submitButton('Искать', ['class' => 'btn btn-primary ' ]) ?>

      </div>

    <?php ActiveForm::end(); ?>

</div>
