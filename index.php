<?php 
// composer autoloader for required packages and dependencies
require_once('vendor/autoload.php');

/** @var \Base $f3 */
$f3 = \Base::instance();

$f3->set('AUTOLOAD',array('app/',function($class){
 
  return strtoupper($class);
}));
$f3->set('ASSETS', $f3->get('BASE') . '/assets/');
$f3->config('config/config.ini');

require_once('config/routes.php');

 if($f3->get('DEBUG') == 0)
	$f3->set('ONERROR', 'Controller->error');
$f3->run();