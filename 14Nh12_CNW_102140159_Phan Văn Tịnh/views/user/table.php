<table class="table table-hover nhanvien-table">
    <thead>
    <tr>
        <th>STT</th>
        <th>Username</th>
        <th>Firstname</th>
        <th>Lastname</th>
        <th>Role</th>
        <th>Hành động</th>
    </tr>
    </thead>
    <tbody id="table-body-nhanvien">
    <?php foreach ($this->data_user as $key => $row) { ?>
        <tr>
            <td><?= $key + 1 ?></td>
            <td><?= $row["username"] ?></td>
            <td><?= $row["firstname"] ?></td>
            <td><?= $row["lastname"] ?></td>
            <td><?= $row["role"] ?></td>
            <td>
                <a href="<?= html_helper::url(["ctl" => "nhanvien", "act" => "edit/" . $row["id"]]) ?>"><button class="btn-common btn-edit"><i class="far fa-edit"></i></button></a>
                <a href="<?= html_helper::url(["ctl" => "nhanvien", "act" => "del/" . $row["id"]]) ?>"><button class="btn-common btn-delete"><i class="fas fa-trash-alt"></i></button></a>
            </td>
        </tr>

    <?php } ?>
    
    </tbody>
</table>