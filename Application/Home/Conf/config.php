<?php
return array(
	//'配置项'=>'配置值'
    'URL_ROUTER_ON'   => true,
    'URL_ROUTE_RULES'=>array(
        'cate/:id'=>'Home/cate/id/:1',
        'admin'=>function(){
            echo "回收也罢";
        }
    ),

);