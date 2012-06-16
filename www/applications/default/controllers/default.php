<?php
/**
 * Access from index.php:
 */


class Default_Controller extends ZP_Controller {
	
	public function __construct() {
		$this->app("default");
		
		$this->Templates = $this->core("Templates");

		$this->Templates->theme();

		$this->Default_Model = $this->model("Default_Model");
	}
	
	public function index() {	
		$vars["hugo"] = "Hello sadasdasdasdas";
		$vars["view"]	 = $this->view("show", TRUE);
		
		$this->render("content", $vars);
	}

	public function test($param1, $param2) {
		print "New dispatcher it's works fine: $param1, $param2";
	}

	public function show($message) {
		$vars["message"] = $message;
		$vars["view"]	 = $this->view("message", TRUE);
		
		$this->render("content", $vars);
		#$this->view("show", $vars);
	}
	
	public function add() {
		if(POST("add")) {
			$vars["alert"] = $this->Default_Model->add();
		}
		
		$vars["view"] = $this->view("add", TRUE);
		
		$this->render("content", $vars);	
	}
	
	public function contact($id) {
		$vars["contact"] = $this->Default_Model->contact($id);
		$vars["view"]    = $this->view("contact", true);
		
		$this->render("content", $vars);
	}
	
	
	public function contacts() {
		$vars["contacts"] = $this->Default_Model->contacts();
		$vars["view"]    = $this->view("contacts", true);
		
		$this->render("content", $vars);
	}
	
	public function example($name) {
		$vars["data"]=array("hugo", $name);
		$vars["view"]=$this->view("example",true);
		$this->render("content",$vars);
	}

}

