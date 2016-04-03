<?php 
// composer autoloader for required packages and dependencies
require_once('vendor/autoload.php');

/** @var \Base $f3 */
$f3 = \Base::instance();
// F3 autoloader for application business code
//$f3->set('AUTOLOAD', 'app/');
$f3->set('AUTOLOAD',array('app/controllers/;app/models/',function($class){
 
  return strtoupper($class);
}));
$f3->set('ASSETS', $f3->get('BASE') . '/assets/');
$f3->config('config/config.ini');

require_once('config/routes.php');
  // $f3->route('GET /enrollees/campus/@controller','\enrollees\campus\@controller->index');
 // $f3->route('GET /enrollees/campus/@controller','\enrollees\campus\@controller->index');

// $f3->config('config/routes.ini');
 if($f3->get('DEBUG') == 0)
	$f3->set('ONERROR', 'Controller->error');
$f3->run();