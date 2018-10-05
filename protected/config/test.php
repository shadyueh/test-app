<?php

Yii::setPathOfAlias('vendor','/vendor');

$config = CMap::mergeArray(
	require(dirname(__FILE__).'/main.php'),
	array(
		'components'=>array(
            'request' => array(
                'class' => 'CodeceptionHttpRequest'
            ),
			/* uncomment the following to provide test database connection
			'db'=>array(
				'connectionString'=>'DSN for test database',
			),
			*/
		),
	)
);

return $config;