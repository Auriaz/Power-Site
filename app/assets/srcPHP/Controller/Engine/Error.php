<?php
 
class Error extends Controller {

	function __construct() {
		parent::__construct();
		

		$this ->View ->Render("Error/Error");


		}
	}