<?php

class Controller{
	protected $f3;
	protected $db;
 
	function beforeRoute(){
 
	}

	function afterRoute(){

 
			echo \Template::instance()->render('layout/page.htm');	
 
		
	}

	function __construct(){

		$f3 = Base::instance();
		$db = new DB\SQL(
				$f3->get('db_dns') .  $f3->get('db_name'),
				$f3->get('db_user'),
				$f3->get('db_pass'),
				array( \PDO::ATTR_ERRMODE => \PDO::ERRMODE_EXCEPTION )
			);

		$this->f3 = $f3;
		$this->db = $db;

		$links=array( '/about-us'=>'About Us'
			,'/programs'=>'Programs'
			,'/enrollees/index'=>'Enrollees'
			,'/students'=>'Students'
			,'/graduates'=>'Graduates'
			,'/activities'=>'Activities'
			,'/products'=>'Products'
			);

		$this->f3->set('links', $links);
	}

	function error(){
		$this->f3->set('view','error.htm');
	
	}

	
}