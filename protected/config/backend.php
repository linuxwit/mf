<?php

return CMap::mergeArray(
                require(dirname(__FILE__) . '/main.php'), array(
            'name' => '后台管理',
            'defaultController' => 'admin',
            'homeUrl' => array('admin/index'),
            'modules' => array(
                'gii' => array(
                    'class' => 'system.gii.GiiModule',
                    'password' => 'admin',
                    'ipFilters' => array('127.0.0.1', '::1'),
                    'generatorPaths' => array(
                        'ext.YiiMongoDbSuite.gii',
                    ),
                ),
            ),
            'components' => array(
            )
                )
);
