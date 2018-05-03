<?php
class register_controller extends vendor_main_controller {
	public function __construct() {
		parent::__construct();
		global $app;
		if (isset($_SESSION['loginUser']['username'])) {
			header( "Location: ".html_helper::url(array('ctl'=>'home')));
		}
	}

	public function index() {
		if($_SERVER['REQUEST_METHOD'] == "POST") {
			$user = $_POST['user'];
			$user = ["username" => $_POST["username"], "password" => $_POST["password"]];

			$auth = new vendor_auth_model();
			if($auth->loginAdmin($user)) {
				header( "Location: ".html_helper::url(array('ctl'=>'home')));
			} else {
				header( "Location: ".html_helper::url(array('ctl'=>'register')));
			}
		}
		$this->display();
	}
}
?>
