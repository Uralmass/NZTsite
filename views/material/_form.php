<?php

use app\models\Category;
use yii\helpers\ArrayHelper;
use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Material */
/* @var $form yii\widgets\ActiveForm */
?>



<div class="container">

    <?php $form = ActiveForm::begin(); ?>

    <h1 class="my-md-5 my-4">Добавить материал</h1>
    <div class="row">
        <div class="col-lg-5 col-md-8">
            <form>
                <div class="form-floating mb-3">



    <?= $form->field($model, 'type')->label(false)->dropDownList( [

            0 => 'Выберите тип',
            1 => 'Книга',
            2 => 'Статья',
            3 => 'Видео',
            4 => 'Сайт/Блог',
            5 => 'Подборка',
            6 => 'Ключевые идеи книги'

        ]

    ); ?>

                    <div class="invalid-feedback">
                        Пожалуйста, выберите значение
                    </div>

                </div>
                <div class="form-floating mb-3">

                    <?= $form->field($model, 'category')->dropDownList(
                        ArrayHelper::map(Category::find()->all(), 'id','title'),
                        ['prompt'=>'Выберите категорию',
                        'class' => 'form-control']); ?>

                    <div class="invalid-feedback">
                        Пожалуйста, выберите значение
                    </div>
                </div>
                <div class="form-floating mb-3">

    <?= $form->field($model, 'title')->label(false)->textInput([
        'placeholder'=>"Название", 'maxlength' => true]) ?>

                    <div class="invalid-feedback">
                        Пожалуйста, заполните поле
                    </div>
                </div>
                <div class="form-floating mb-3">

    <?= $form->field($model, 'author')->label(false)->textInput([
        'placeholder'=>"Авторы", 'maxlength' => true]) ?>

                    <div class="invalid-feedback">
                        Пожалуйста, заполните поле
                    </div>
                </div>
                <div class="form-floating mb-3">

    <?= $form->field($model, 'description')->label(false)->textarea([
            'rows' => 6, 'placeholder'=>"Описание"]) ?>

                    <div class="invalid-feedback">
                        Пожалуйста, заполните поле
                    </div>
                </div>

    <div class="form-group">
        <?= Html::submitButton('Добавить', ['class' => 'btn btn-primary']) ?>
            </form>
        </div>
    </div>
</div>

<?php ActiveForm::end(); ?>

</div>




