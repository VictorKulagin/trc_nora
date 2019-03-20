<?php
$params = array_merge(
    require(__DIR__ . '/../../common/config/params.php'),
    require(__DIR__ . '/../../common/config/params-local.php'),
    require(__DIR__ . '/params.php'),
    require(__DIR__ . '/params-local.php')
);

return [
    'id' => 'app-frontend',
    'basePath' => dirname(__DIR__),
    'language' => 'ru-RU',
    'bootstrap' => ['log'],
    'layout' =>'innerTemplate',
    'controllerNamespace' => 'frontend\controllers',
    'modules' => [
        'rbac' => 'dektrium\rbac\RbacWebModule',

//        'user' => [
//            'class' => 'dektrium\user\Module',
//            // following line will restrict access to admin page
//            'as frontend' => 'dektrium\user\filters\FrontendFilter',
//            'enableRegistration'=>true,
//            'enableFlashMessages' => false,
//            //'enableGeneratingPassword' => true, // автоматически создавть пароль при регистраиции и отправлять на почту
//            'enableConfirmation' => false,// подтверждение регистрации
//            //'enableUnconfirmedLogin' => true, // разрешена авторизация без подтверждения учетной записи
//            'enablePasswordRecovery' => false, // восстановление паролей
//            'admins' => ['admin'],
//        ],
    ],
    'components' => [
        'user' => [
            'identityClass' => 'common\models\User',
            'enableAutoLogin' => true,
        ],
//        'user' => [
//            'identityCookie' => [
//                'name'     => '_frontendIdentity',
//                'path'     => '/',
//                'httpOnly' => true,
//            ],
//        ],
//        'session' => [
//            'name' => 'FRONTENDSESSID',
//            'cookieParams' => [
//                'httpOnly' => true,
//                'path'     => '/',
//            ],
//        ],
        'log' => [
            'traceLevel' => YII_DEBUG ? 3 : 0,
            'targets' => [
                [
                    'class' => 'yii\log\FileTarget',
                    'levels' => ['error', 'warning'],
                ],
            ],
        ],
        'urlManager' => [
            'enablePrettyUrl'=>true,
            'showScriptName' => false,
            'rules' => [
                ''=>'site/index',
                'video'=>'video/index',
                'stage-rental'=>'stage-rental/index',
                'video/<id:\d+>'=>'video/index',

                'get/shops-list/<key:[-\w]+>'=>'get/shops-list',

                '<action:(holidays|sale|rent|news|holidays-for-customers|reports)>/<id:[-\w]+>' =>'content/category',

                '<action:(vacancies|rent)>' =>'content/category',

                'content/cat/<cat:\d+>'=>'content/index',

                ['class' => 'common\components\StoresUrlRule'],

                '<id:[-\w]+>'=>'content/index',
            ],
        ],
        'errorHandler' => [
            'errorAction' => 'site/error',
        ],
    ],
    'params' => $params,
];
