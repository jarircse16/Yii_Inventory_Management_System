<?php

$params = require __DIR__ . '/params.php';
$db = require __DIR__ . '/db.php';

$config = [
    'id' => 'basic',
    'basePath' => dirname(__DIR__),
    'bootstrap' => ['log'],
    'aliases' => [
        '@bower' => '@vendor/bower-asset',
        '@npm'   => '@vendor/npm-asset',
    ],
    'components' => [
        'request' => [
            // !!! insert a secret key in the following (if it is empty) - this is required by cookie validation
            'cookieValidationKey' => 'Y0QsPLBQUiLgId2CQnGMV_hCJSvEFM0-',
        ],
        'authManager' => [
          'class' => 'yii\rbac\DbManager',
        ],
        'as access' => [
          'class' => AccessControl::class,
          'rules' => [
            'allow' => true,
            'roles' => ['@'],
          ],
        ],
        'cache' => [
            'class' => 'yii\caching\FileCache',
        ],
        'user' => [
            'identityClass' => 'app\models\User',
            'enableAutoLogin' => true,
        ],
        'errorHandler' => [
            'errorAction' => 'site/error',
        ],
        'mailer' => [
            'class' => \yii\symfonymailer\Mailer::class,
            'viewPath' => '@app/mail',
            // send all mails to a file by default.
            'useFileTransport' => true,
        ],
        'log' => [
            'traceLevel' => YII_DEBUG ? 3 : 0,
            'targets' => [
                [
                    'class' => 'yii\log\FileTarget',
                    'levels' => ['error', 'warning'],
                ],
            ],
        ],
        'db' => $db,

        'urlManager' => [
             'enablePrettyUrl' => true,
             'showScriptName' => false,
             'rules' => [
                 // Admin routes
                 'admin' => 'admin/dashboard',
                 'admin/dashboard' => 'admin/dashboard',
                 'admin/index' => 'admin/index',
                 'admin/users' => 'admin/users',
                 'admin/edit-user' => 'admin/edit-user',

                 // Category routes
                 'category' => 'category/index',
                 'category/index' => 'category/index',
                 'category/create' => 'category/create',
                 'category/update' => 'category/update',
                 'category/delete' => 'category/delete',

                 // Item routes
                 'item' => 'item/index',
                 'item/index' => 'item/index',
                 'item/create' => 'item/create',
                 'item/update' => 'item/update',
                 'item/delete' => 'item/delete',

                 // Order routes
                 'order' => 'order/index',
                 'order/index' => 'order/index',
                 'order/create' => 'order/create',
                 'order/update' => 'order/update',
                 'order/delete' => 'order/delete',

                 // Payment routes
                 'payment' => 'payment/index',
                 'payment/index' => 'payment/index',
                 'payment/create' => 'payment/create',
                 'payment/update' => 'payment/update',
                 'payment/delete' => 'payment/delete',

                 // User routes
                 'user' => 'user/index',
                 'user/index' => 'user/index',
                 'user/create' => 'user/create',
                 'user/update' => 'user/update',
                 'user/delete' => 'user/delete',

                 // Site routes
                 'site' => 'site/index',
                 'site/index' => 'site/index',
                 'site/about' => 'site/about',
                 'site/contact' => 'site/contact',
                 'site/error' => 'site/error',
                 'site/login' => 'site/login',
             ],
         ],
    ],
    'params' => $params,
];

if (YII_ENV_DEV) {
    // configuration adjustments for 'dev' environment
    $config['bootstrap'][] = 'debug';
    $config['modules']['debug'] = [
        'class' => 'yii\debug\Module',
        // uncomment the following to add your IP if you are not connecting from localhost.
        //'allowedIPs' => ['127.0.0.1', '::1'],
    ];

    $config['bootstrap'][] = 'gii';
    $config['modules']['gii'] = [
        'class' => 'yii\gii\Module',
        // uncomment the following to add your IP if you are not connecting from localhost.
        //'allowedIPs' => ['127.0.0.1', '::1'],
    ];
}

return $config;
