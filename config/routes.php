<?php
 

$f3->route('GET /','\welcome->index');

$f3->route('GET /@controller','\@controller->index');
$f3->route('GET /@controller/@action/@id','\@controller->@action');
$f3->route('GET /@controller/@action','\@controller->@action');