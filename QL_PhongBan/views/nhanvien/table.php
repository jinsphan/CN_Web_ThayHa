<table class="table table-hover nhanvien-table">
    <thead>
    <tr>
        <th>STT</th>
        <th>Mã nhân viên</th>
        <th>Tên nhân viên</th>
        <th>Địa chỉ</th>
        <th>Phòng ban</th>
        <th>Hành động</th>
    </tr>
    </thead>
    <tbody id="table-body-nhanvien">
    <?php foreach ($this->data_nhanvien as $key => $row) { ?>
        <tr>
            <td><?= $key + 1 ?></td>
            <td><?= $row["ma_nv"] ?></td>
            <td><?= $row["fullname"] ?></td>
            <td><?= $row["address"] ?></td>
            <td><?= $row["phongban_id"] ?></td>
            <td>
                <a href="<?= html_helper::url(["ctl" => "nhanvien", "act" => "edit/" . $row["id"]]) ?>"><button class="btn-common btn-edit"><i class="far fa-edit"></i></button></a>
                <a href="<?= html_helper::url(["ctl" => "nhanvien", "act" => "del/" . $row["id"]]) ?>"><button class="btn-common btn-delete"><i class="fas fa-trash-alt"></i></button></a>
            </td>
        </tr>

    <?php } ?>
    
    </tbody>
</table>