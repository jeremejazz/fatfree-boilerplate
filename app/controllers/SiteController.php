<?php
/**
 * You can copy this file to create your controllers 
 * just extend this to controller
 *
 *
 */

namespace Controllers;

class SiteController extends Controller{



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
}