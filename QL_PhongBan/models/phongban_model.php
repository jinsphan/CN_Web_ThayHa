<?php
class phongban_model extends vendor_crud_model
{
    // protected $table = 'phongban';
    public $filter = ["ALL" => "ALL", "MA_PB" => "ma_pb", "TEN_PB" => "description"];
	public function __construct() {
		parent::__construct();
    }
    
    public function get($filter = "ALL", $name="") {
        if ($filter == "ALL") {
            $query = "SELECT * FROM $this->table WHERE ma_pb" . " LIKE " . "'%". $name ."%' OR description LIKE '%" . $name ."%'";
            $results = mysqli_query($this->con, $query);
        } else {
            $query = "SELECT * FROM $this->table WHERE " . $this->filter[$filter] . " LIKE " . "'%". $name ."%'";
            $results = mysqli_query($this->con, $query);
        }
        $data = [];
        if ($results) {
            $row = $results->fetch_assoc();
            $data[] = $row;
            while($row = $results->fetch_assoc()) {
                $data[] = $row;
            }
        }
        return $data;
    }

    public function add($phongban) {
        $ma_pb = isset($phongban['ma_pb']) ? $phongban['ma_pb'] : null;
        $ten_pb = isset($phongban['ten_pb']) ? $phongban['ten_pb'] : null;
        if ($ma_pb == null || $ten_pb == null) {
            return false;
        }
        if (strpos($ma_pb, " ") != false || strlen($ma_pb) < 1) {
            return false;
        }
        $data = [
            "ma_pb" => $ma_pb,
            "description" => $ten_pb
        ];
        return $this->addRecord($data);       
    }
}