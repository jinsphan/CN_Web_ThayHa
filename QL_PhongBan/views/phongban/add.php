<?php include_once 'views/layout/'.$this->layout.'header.php'; ?>
<div class="phongban-container">
    <form method="POST" action="<?= html_helper::url(["ctl" => "phongban", "act" => "add"]) ?>">
        <div class="form-group">
            <label for="input-ma-phongban">Mã phòng ban</label>
            <input type="text" class="form-control" id="input-ma-phongban"  placeholder="Nhập mã phòng ban" name="ma_pb">
            <small id="ma-phongban-help" class="form-text text-muted"></small>
        </div>

        <div class="form-group">
            <label for="input-ten-phongban">Tên phòng ban</label>
            <input type="text" class="form-control" id="input-ten-phongban"  placeholder="Nhập tên phòng ban" name="ten_pb">
            <small id="ten-phongban-help" class="form-text text-muted"></small>
        </div>

        <button type="submit" class="btn btn-primary">Add</button>
    </form>
</div>
<script src="/media/js/phongban.js"></script>
<?php include_once 'views/layout/'.$this->layout.'footer.php'; ?>