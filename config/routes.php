<?php
 

$f3->route('GET /','\Controllers\welcome->index');

$f3->route('GET /brew/@count',
    function($f3,$params) {
        echo $params['count'].' bottles of root beer on the wall.';
    }
);

$f3->route('GET /@controller','Controllers\@controller->index');
$f3->route('GET /@controller/@action/@id','Controllers\@controller->@action');
$f3->route('GET /@controller/@action','Controllers\@controller->@action');