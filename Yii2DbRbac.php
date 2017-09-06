<?php
/**
 * Yii2DbRbac for Yii2
 */
namespace slimic960\db_rbac;

use Yii;

class Yii2DbRbac extends \yii\base\Module
{
    public $controllerNamespace = 'slimic960\db_rbac\controllers';
    public $theme = false;
    public $userClass;
    public $accessRoles;

    public function init()
    {
        parent::init();
        $this->registerTranslations();

        if ($this->theme) {
            Yii::$app->view->theme = new \yii\base\Theme($this->theme);
        }
    }

    public function registerTranslations()
    {
        if (!isset(Yii::$app->i18n->translations['db_rbac'])) {
            Yii::$app->i18n->translations['db_rbac'] = [
                'class' => 'yii\i18n\PhpMessageSource',
                'sourceLanguage' => 'ru-Ru',
                'basePath' => '@slimic960/db_rbac/messages',
            ];
        }
    }

    public static function t($category, $message, $params = [], $language = null)
    {
        return Yii::t('modules/db_rbac/' . $category, $message, $params, $language);
    }
}
