<?php
namespace slimic960\db_rbac\views\access;

use Yii;
use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\Links */
/* @var $form yii\widgets\ActiveForm */
$this->title = Yii::t('db_rbac', 'Новое правило');
$this->params['breadcrumbs'][] = ['label' => Yii::t('db_rbac', 'Правила доступа'), 'url' => ['permission']];
$this->params['breadcrumbs'][] = Yii::t('db_rbac', 'Новое правило');
?>
<div class="news-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <div class="links-form">
        <?php
        if (!empty($error)) {
            ?>
            <div class="error-summary">
                <?php
                echo implode('<br>', $error);
                ?>
            </div>
        <?php
        }
        ?>
        <div class="panel panel-default">
        <?php $form = ActiveForm::begin(); ?>

        <div class="panel-footer">
        <div class="list-group">
        <div class="form-group">
            <?= Html::label(Yii::t('db_rbac', 'Текстовое описание:')); ?>
            <p class="list-group-item-text">
            <?= Html::textInput('description'); ?>
            </p>
        </div>
        </div>

        <div class="list-group">
        <div class="form-group">
            <?= Html::label(Yii::t('db_rbac', 'Разрешенный доступ:')); ?>
            <p class="list-group-item-text">
            <?= Html::textInput('name'); ?>
            </p>
            <p class="list-group-item-text validate-color">
            <?=Yii::t('db_rbac', '<br>* Формат: <strong>module/controller/action</strong>');?>
            </p>
        </div>
        </div>

        <div class="form-group">
            <?= Html::submitButton(Yii::t('db_rbac', 'Сохранить'), ['class' => 'btn btn-success']) ?>
        </div>

        <?php ActiveForm::end(); ?>

        </div>
        </div>
    </div>
</div>
