<?php
/**
 * 
 * Main controller class. 
 *
 *
 */
namespace lib;

class Controller{
	protected $f3;

	function __construct(){
		$this->f3 = \Base::instance();
	}

	
}