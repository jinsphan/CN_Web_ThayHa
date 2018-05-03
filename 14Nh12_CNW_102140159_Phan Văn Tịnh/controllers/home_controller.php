<?php
//include "models/home_model.php"; 
class home_controller extends main_controller
{
	public function index()
	{
		$this->requireAuth();
		$this->display();
	}
}
?>
