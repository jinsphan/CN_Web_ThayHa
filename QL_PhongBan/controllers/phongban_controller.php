<?php
//include "models/home_model.php"; 
class phongban_controller extends main_controller
{
	public function index() 
	{
		$model = new phongban_model();
		$this->data_phongban = $model->get();
		if ($this->data_phongban[0] == NULL) $this->data_phongban = [];
		$this->display();
	}

	public function get() {
		$model = new phongban_model();
		$name = $_POST['name'];
		$filter = $_POST['filter'];
		$data = $model->get($filter, $name);
		echo json_encode($data);																																																																																																																																																																																																								
	}

	public function add() {
		$this->requireAuth();
		if ($_SERVER['REQUEST_METHOD'] == "POST") {
			$model = new phongban_model();
			if ($result = $model->add($_POST)) {
				header("Location: " . html_helper::url(['ctl' => 'phongban']));
			} else {
				header("Location: " . html_helper::url(['ctl' => 'phongban', 'act' => 'add']));
			}
		}
		$this->display();
	}

	public function edit($id_pb) {
		$this->requireAuth();
		$model = new phongban_model();
		if ($_SERVER['REQUEST_METHOD'] == "POST") {
			$datas = [
				"ma_pb" => $_POST["ma_pb"],
				"description" => $_POST["ten_pb"],
			];
			if ($result = $model->editRecord($id_pb, $datas)) {
				header("Location: " . html_helper::url(['ctl' => 'phongban']));
			}
		}
		$this->data = $model->getRecord($id_pb);
		$this->display();
	}

	public function del($id_pb) {
		$this->requireAuth();
		$model = new phongban_model();
		$model->delRecord($id_pb);
		header("Location: " . html_helper::url(['ctl' => 'phongban']));
	}

}
?>