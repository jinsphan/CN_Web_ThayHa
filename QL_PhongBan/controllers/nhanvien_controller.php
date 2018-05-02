<?php
//include "models/home_model.php"; 
class nhanvien_controller extends main_controller
{
	public function index() 
	{
		$model = new nhanvien_model();
		$this->data_nhanvien = $model->get();
		if ($this->data_nhanvien[0] == NULL) $this->data_nhanvien = [];
		$this->display();
    }
     
    public function phongban($params) {
        $id_pb = $params[1];
        $model = new nhanvien_model();
        if ($id_pb) {
			$this->data_nhanvien = $model->get("PB_NV", $id_pb, true);
			if ($this->data_nhanvien[0] == NULL) $this->data_nhanvien = [];
			$this->id_pb = $id_pb;
        }
        $this->display();
    }

	public function get() {
		$model = new nhanvien_model();
		$name = $_POST['name'];
		$filter = $_POST['filter'];
		$phongban_id = isset($_POST['phongban_id']) ? $_POST['phongban_id'] : NULL;
		if ($phongban_id == NULL) $data = $model->get($filter, $name);
		else {
			$data = $model->getByPhongBan($phongban_id, $filter, $name);
		}
		echo json_encode($data);																																																																																																																																																																																																							
	}

	public function add() {
		$this->requireAuth();
		$phongban_model = new phongban_model();
		$model = new nhanvien_model();
		
		$this->phongbans = $phongban_model->get();
		if ($_SERVER['REQUEST_METHOD'] == "POST") {
			if ($result = $model->add($_POST)) {
				header("Location: " . html_helper::url(['ctl' => 'nhanvien']));
			} else {
				header("Location: " . html_helper::url(['ctl' => 'nhanvien', 'act' => 'add']));
			}
		}
		$this->display();
	}

	public function edit($id_nv) {
		$this->requireAuth();
		$phongban_model = new phongban_model();
		$model = new nhanvien_model();
		
		if ($_SERVER['REQUEST_METHOD'] == "POST") {
			if ($result = $model->edit($id_nv, $_POST)) {
				header("Location: " . html_helper::url(['ctl' => 'nhanvien']));
			}
		}
		$this->phongbans = $phongban_model->get();
		$this->data = $model->getRecord($id_nv);
		$this->display();
	}

	public function del($id_nv) {
		$this->requireAuth();
		$model = new nhanvien_model();
		$model->delRecord($id_nv);
		header("Location: " . html_helper::url(['ctl' => 'nhanvien']));
	}
}
?>