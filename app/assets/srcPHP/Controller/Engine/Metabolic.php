<?php
class Metabolic extends Controller {

	function __construct() {
		parent::__construct();
		
	}

 function Index() {
		
		$this ->Model ->Index();
		$this ->View ->title = "Mobilizacja" ;

		$this ->View ->Render("Metabolic/Index");	
	 	
	 	
	}
}