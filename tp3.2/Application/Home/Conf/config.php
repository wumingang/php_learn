<?php
return array(
	//'配置项'=>'配置值'
	'URL_ROUTER_ON' => true,
	'URL_ROUTE_RULES'=>array(
// 			'Index/t1/id/:id'               => array('Test/t2','appendval=1'),
			'Index/t1/:cab/:id'               => array('Test/t2?id=:2'),
			'Index/t1/:cab/:id'               => function(){echo 'error404';}
	),
);