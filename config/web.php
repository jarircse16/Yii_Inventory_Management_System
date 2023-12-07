<?php

use yii\filters\AccessControl;

$params = require __DIR__ . '/params.php';
$db = require __DIR__ . '/db.php';

$config = [
    'name' => 'Inventory Management System',
    'id' => 'basic',
    'basePath' => dirname(__DIR__),
    'bootstrap' => ['log'],
    'aliases' => [
        '@bower' => '@vendor/bower-asset',
        '@npm'   => '@vendor/npm-asset',
    ],
    'components' => [
        'request' => [
            'cookieValidationKey' => 'Y0QsPLBQUiLgId2CQnGMV_hCJSvEFM0-',
        ],
        'authManager' => [
          'class' => 'yii\rbac\DbManager',
        ],
        'as access' => [
          'class' => AccessControl::class,
          'rules' => [
            [
              'allow' => true,
              'roles' => ['admin'], // Allow guests (non-logged-in users)
            ],

            [
                'actions' => ['login '],
                'allow' => true,
                'roles' => ['?'],
            ],
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
            'errorAction' => 'site/login',
        ],
        'mailer' => [
            'class' => \yii\symfonymailer\Mailer::class,
            'viewPath' => '@app/mail',
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
                '' => 'admin/dashboard', // Set the default route to admin dashboard

                // Admin routes
                'admin' => 'admin/dashboard',
                'admin/dashboard' => 'admin/dashboard',
                'admin/index' => 'admin/index',
                'admin/users' => 'admin/users',
                'admin/edit-user/<id:\d+>' => 'admin/edit-user', // Adjusted route with parameter
                'admin/logout' => 'admin/logout', // Add logout route
                // ... other admin routes

                // Category routes
                'category' => 'category/index',
                'category/index' => 'category/index',
                'category/create' => 'category/create',
                'category/update/<id:\d+>' => 'category/update', // Adjusted route with parameter
                'category/delete/<id:\d+>' => 'category/delete', // Adjusted route with parameter
                // ... other category routes

                // Item routes
                'item' => 'item/index',
                'item/index' => 'item/index',
                'item/create' => 'item/create',
                'item/update/<id:\d+>' => 'item/update', // Adjusted route with parameter
                'item/delete/<id:\d+>' => 'item/delete', // Adjusted route with parameter
                // ... other item routes

                // Order routes
                'order' => 'order/index',
                'order/index' => 'order/index',
                'order/create' => 'order/create',
                'order/update/<id:\d+>' => 'order/update', // Adjusted route with parameter
                'order/delete/<id:\d+>' => 'order/delete', // Adjusted route with parameter
                // ... other order routes

                // Payment routes
                'payment' => 'payment/index',
                'payment/index' => 'payment/index',
                'payment/create' => 'payment/create',
                'payment/update/<id:\d+>' => 'payment/update', // Adjusted route with parameter
                'payment/delete/<id:\d+>' => 'payment/delete', // Adjusted route with parameter
                // ... other payment routes

                // User routes
                'user' => 'user/index',
                'user/index' => 'user/index',
                'user/create' => 'user/create',
                'user/update/<id:\d+>' => 'user/update', // Adjusted route with parameter
                'user/delete/<id:\d+>' => 'user/delete', // Adjusted route with parameter
                // ... other user routes
            ],
        ],

    ],
    'params' => $params,
];

if (YII_ENV_DEV) {
    $config['bootstrap'][] = 'debug';
    $config['modules']['debug'] = [
        'class' => 'yii\debug\Module',
    ];

    $config['bootstrap'][] = 'gii';
    $config['modules']['gii'] = [
        'class' => 'yii\gii\Module',
    ];
}

return $config;
