<?php
namespace slimic960\db_rbac\views\user;

use Yii;
use yii\helpers\Html;
use yii\widgets\ActiveForm;

$this->title = 'Управление ролями пользователя';
$this->params['breadcrumbs'][] = $this->title;
?>

<h1><?=Yii::t('db_rbac', 'Управление ролями пользователя');?> <?= $user->getUserName(); ?></h1>
<div class="panel panel-default">
    <ul class="list-group">
        <div class="panel-footer">
<?php $form = ActiveForm::begin(['action' => ["update", 'id' => $user->getId()]]); ?>

<?= Html::checkboxList('roles', $user_permit, $roles, ['separator' => '<br>']); ?>
        </div>
    </ul>
</div>
<div class="form-group">
    <?= Html::submitButton(Yii::t('db_rbac', 'Сохранить'), ['class' => 'btn btn-success']) ?>
</div>


<?php ActiveForm::end(); ?>

