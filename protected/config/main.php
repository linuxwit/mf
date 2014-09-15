<?php

return array(
    'basePath' => dirname(__FILE__) . DIRECTORY_SEPARATOR . '..',
    'preload' => array('log'),
    'theme' => 'charisma',
    'import' => array(
        'application.models.*',
        'application.components.*',
    ),
    'modules' => array(
    ),
    'components' => array(
        'user' => array(
            'allowAutoLogin' => true,
        ),
//        'db' => array(
//            'connectionString' => 'mysql:host=localhost;dbname=xiaoye',
//            'emulatePrepare' => true,
//            'username' => 'root',
//            'password' => 'zaq12wsx',
//            'charset' => 'utf8',
//        ),
        'errorHandler' => array(
            'errorAction' => 'site/error',
        ),
        'log' => array(
            'class' => 'CLogRouter',
            'routes' => array(
                array(
                    'class' => 'CFileLogRoute',
                    'levels' => 'error, warning',
                ),
            ),
        ),
    ),
    'params' => array(
        // this is used in contact page
        'adminEmail' => 'linuxwit@gmail.com',
    ),
);