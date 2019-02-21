<?php
/**
 * You can copy this file to create your controllers 
 * just extend this to controller
 *
 *
 */

namespace controllers;

class SiteController extends \lib\Controller{

	function __construct(){
		parent::__construct();
		/*Database connection */
		/*
		$db = new \DB\SQL(
				$f3->get('db_dns') .  $f3->get('db_name'),
				$f3->get('db_user'),
				$f3->get('db_pass'),
				array( \PDO::ATTR_ERRMODE => \PDO::ERRMODE_EXCEPTION )
			);

		$this->f3 = $f3;
		$this->db = $db;

		
		$this->f3->set('links', $links);
		*/
	}

	/** 
	* The following functions (beforeRoute() and afterRoute()) are event handlers that are called when 
	* this class is used on the route file (ex. \Controllers\welcome->index' ). 
	* You will have to call them manually if you instantiate the class instead when instantiated in a function within a route. 
	*/
	function beforeRoute(){

	}


	function afterRoute(){

		echo \Template::instance()->render('layout/page.htm');	

	}
	
	function error(){
		$this->f3->set('view','error.htm');
	
	}
}