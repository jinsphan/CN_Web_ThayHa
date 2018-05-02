<?php include_once 'views/layout/'.$this->layout.'header.php'; ?>
<div class="nhanvien-container">
    <form method="POST" action="<?= html_helper::url(["ctl" => "nhanvien", "act" => "edit/" . $this->data["id"]]) ?>">
        <div class="form-group">
            <label for="input-ma-nhanvien">Mã nhân viên</label>
            <input value="<?= $this->data["ma_nv"] ?>" type="text" class="form-control" id="input-ma-nhanvien"  placeholder="Nhập mã nhân viên" name="ma_nv">
            <small id="ma-nhanvien-help" class="form-text text-muted"></small>
        </div>

        <div class="form-group">
            <label for="input-ten-nhanvien">Tên nhân viên</label>
            <input value="<?= $this->data["fullname"] ?>" type="text" class="form-control" id="input-ten-nhanvien"  placeholder="Nhập tên nhân viên" name="ten_nv">
            <small id="ten-nhanvien-help" class="form-text text-muted"></small>
        </div>

        <div class="form-group">
            <label for="input-diachi-nhanvien">Địa chỉ</label>
            <input value="<?= $this->data["address"] ?>" type="text" class="form-control" id="input-diachi-nhanvien"  placeholder="Nhập địa chỉ nhân viên" name="diachi_nv">
            <small id="diachi-nhanvien-help" class="form-text text-muted"></small>
        </div>

        <div class="form-group">
            <label class="mr-sm-2" for="ma_pb">Mã phòng ban </label>
            <select class="custom-select mb-2 mr-sm-2 mb-sm-0" id="ma_pb" name="ma_pb">
                <option value="0" selected>Choose...</option>
                <?php foreach($this->phongbans as $key => $value) { ?>
                <option <?php if($this->data["phongban_id"] == $value["id"]) echo "selected"; ?> value="<?= $value["id"] ?>"><?= $value["description"] ?></option>
                <?php } ?>
            </select>
        </div>

        <button type="submit" class="btn btn-primary">Edit</button>
    </form>
    
</div>
<?php include_once 'views/layout/'.$this->layout.'footer.php'; ?>