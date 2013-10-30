<?php

return array(
    'basePath' => dirname(__FILE__) . DIRECTORY_SEPARATOR . '..',
    'preload' => array('log'),
    'theme' => 'charisma',
    'import' => array(
        'application.models.*',
        'application.components.*',
        'ext.YiiMongoDbSuite.*',
    ),
    'modules' => array(
    ),
    'components' => array(
        'user' => array(
            'allowAutoLogin' => true,
        ),
        'mongodb' => array(
            'class' => 'EMongoDB',
            'connectionString' => 'mongodb://127.0.0.1:27017',
            'dbName' => 'witcms',
            'fsyncFlag' => true,
            'safeFlag' => true,
            'useCursor' => false
        ),
//        'db' => array(
//            'connectionString' => 'mysql:host=localhost;dbname=xiaoye',
//            'emulatePrepare' => true,
//            'username' => 'root',
//            'password' => '',
//            'charset' => 'utf8',
//        ),
        'errorHandler' => array(
            // use 'site/error' action to display errors
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