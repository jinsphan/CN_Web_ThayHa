<?php
//include "models/home_model.php"; 
class user_controller extends main_controller
{
	public function index()
	{
        $this->requireAuth();
        
        $model = new user_model();
        $this->data_user = $model->getAll();

		$this->display();
    }

    public function get() {
        $name = $_POST["name"];
        $model = new user_model();
        $data = $model->getSearch($name);
        echo json_encode($data);
    }
    

}
?>
