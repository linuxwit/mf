<?php

return CMap::mergeArray(
                require(dirname(__FILE__) . '/main.php'), array(
            'name' => '免费商城',
            'theme' => 'mall',
            'defaultController' => 'site',
            'homeUrl' => array('site/index'),
            'components' => array(
//                'urlManager' => array(
//                    'urlFormat' => 'path',
//                    'showScriptName' => false,
//                    'rules' => array(
//                        '<controller:\w+>/<id:\d+>' => '<controller>/view',
//                        '<controller:\w+>/<action:\w+>/<id:\d+>' => '<controller>/<action>',
//                        '<controller:\w+>/<action:\w+>' => '<controller>/<action>',
//                    ),
//                ),
            ),
                )
);