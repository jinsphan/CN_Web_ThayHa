<?php
class nhanvien_model extends vendor_crud_model
{
    public $filter = ["ALL" => "ALL", "MA_NV" => "ma_nv", "TEN_NV" => "fullname", "DIA_CHI_NV" => "address", "PB_NV" => "phongban_id"];

	public function __construct() {
		parent::__construct();
		
	}

	public function get($filter = "ALL", $name="", $exactly = false) {
		if ($filter == "ALL") {
            $query = "SELECT * FROM $this->table WHERE ma_nv" . " LIKE " . "'%". $name ."%' OR fullname LIKE '%" . $name ."%' OR address LIKE '%" . $name . "%' OR phongban_id LIKE '%{$name}%'";
			$results = mysqli_query($this->con, $query);
        } else {
			if (!$exactly) {
				$query = "SELECT * FROM $this->table WHERE " . $this->filter[$filter] . " LIKE " . "'%". $name ."%'";
			} else {
				$query = "SELECT * FROM $this->table WHERE " . $this->filter[$filter] . " = " . "'". $name ."'";
			}
            $results = mysqli_query($this->con, $query);
        }
        return vendor_crud_model::getDataByResult($results);
    }

    public function getByPhongBan($pb_ib, $filter, $name) {
        $query = "SELECT * FROM $this->table WHERE phongban_id = '". $pb_ib ."' AND ";
        if ($filter == "ALL") {
            $query .= "(ma_nv" . " LIKE " . "'%". $name ."%' OR fullname LIKE '%" . $name ."%' OR address LIKE '%" . $name . "%' OR phongban_id LIKE '%{$name}%')";
        } else {
			$query .= "(" . $this->filter[$filter] . " LIKE '%$name%')";
        }
        $results = mysqli_query($this->con, $query);
        return vendor_crud_model::getDataByResult($results);
    }

    public function checkData($data) {
        if ($data["ma_nv"] == "" || $data["ten_nv"] == "" || $data["diachi_nv"] == "" || $data["ma_pb"] == "0") return false;
        if (strlen($data["ma_nv"]) > 10 ) return false;
        return true;
    }

    public function formatData($data) {
        $dataFm = [
            "ma_nv" => $data["ma_nv"],
            "fullname" => $data["ten_nv"],
            "phongban_id" => intval($data["ma_pb"]),
            "address" => $data["diachi_nv"],
        ];
        return $dataFm;
    }
    
    public function add($data) {
        if (!$this->checkData($data)) return false;
        $datas = $this->formatData($data);
        return $this->addRecord($datas);
    }

    public function edit($id, $data) {
        if (!$this->checkData($data)) return false;
        $datas = $this->formatData($data);
        return $this->editRecord($id, $datas);
    }
}