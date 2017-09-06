<?php
namespace slimic960\db_rbac\views\access;

use Yii;
use yii\helpers\Html;
use yii\widgets\ActiveForm;

$this->title = Yii::t('db_rbac', 'Редактирование роли: ') . ' ' . $role->name;
$this->params['breadcrumbs'][] = ['label' => Yii::t('db_rbac', 'Управление ролями'), 'url' => ['role']];
$this->params['breadcrumbs'][] = Yii::t('db_rbac', 'Редактирование');
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


        <div class="panel-heading">
            <div class="list-group">
            <div class="form-group">
            <?= Html::label(Yii::t('db_rbac', 'Название роли:')); ?>
            <p class="list-group-item-text">
            <?= Html::textInput('name', $role->name); ?>
            </p>
            </div>
        </div>

        <div class="list-group">
            <div class="form-group">
                <?= Html::label(Yii::t('db_rbac', 'Текстовое описание:')); ?>
                <p class="list-group-item-text">
                <?= Html::textInput('description', $role->description); ?>
                </p>
            </div>
        </div>
        </div>
        <div class="panel-footer">
        <div class="form-group">
            <?= Html::label(Yii::t('db_rbac', 'Разрешенные доступы')); ?>
            <?= Html::checkboxList('permissions', $role_permit, $permissions, ['separator' => '<br>']); ?>
        </div>

        <div class="form-group">
            <?= Html::submitButton(Yii::t('db_rbac', 'Сохранить'), ['class' => 'btn btn-success']) ?>
        </div>
        </div>
        <?php ActiveForm::end(); ?>
        </div>
    </div>
</div>
</div>