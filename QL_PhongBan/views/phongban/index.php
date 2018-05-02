<?php include_once 'views/layout/'.$this->layout.'header.php'; ?>
<div class="phongban-container">
    <div class="phongban-control">
        <div class="row">
            <div class="col-md-7">
                <a href="<?= html_helper::url(["ctl" => "phongban", "act" => "add"]) ?>" ><button class="btn-common">+</button></a>
            </div>
            <div class="col-md-5">
                <div class="input-group">
                    <div class="input-group-btn search-panel">
                        <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
                            <span id="search_concept">Filter by</span> <span class="caret"></span>
                        </button>
                        <ul class="dropdown-menu" role="menu">
                            <li><a key="ALL" href="#">Tất cả</a></li>
                            <li><a key="MA_PB" href="#">Mã phòng ban</a></li>
                            <li><a key="TEN_PB" href="#">Tên phòng ban</a></li>
                        </ul>
                    </div>
                    <input type="hidden" name="search_param" value="all" id="search_param">         
                    <input id="input-search" type="text" class="form-control" name="x" placeholder="Search term...">
                    <span class="input-group-btn">
                        <button id="btn-search-phongban" class="btn btn-default" type="button"><span class="glyphicon glyphicon-search"></span></button>
                    </span>
                </div>
            </div>
        </div>
    </div>
    <br>

	<table class="table table-hover phongban-table">
		<thead>
		<tr>
            <th>STT</th>
			<th>Mã phòng ban</th>
			<th>Tên phòng ban</th>
			<th>Ngày tạo</th>
            <th>Hành động</th>
		</tr>
		</thead>
		<tbody id="table-body-phongban">
        <?php foreach ($this->data_phongban as $key => $row) { ?>
            <tr>
                <td><?= $key + 1 ?></td>
                <td><?= $row["ma_pb"] ?></td>
                <td><?= $row["description"] ?></td>
                <td><?= $row["created_at"] ?></td>
                <td>
                    <a href="<?= html_helper::url(["ctl" => "nhanvien", "act" => "phongban/" . $row["id"]]) ?>"><button class="btn-common btn-view"><i class="fas fa-eye"></i></button></a>
                    <a href="<?= html_helper::url(["ctl" => "phongban", "act" => "edit/" . $row["id"]]) ?>"><button class="btn-common btn-edit"><i class="far fa-edit"></i></button></a>
                    <a href="<?= html_helper::url(["ctl" => "phongban", "act" => "del/" . $row["id"]]) ?>"><button class="btn-common btn-delete"><i class="fas fa-trash-alt"></i></button></a>
                </td>
            </tr>

        <?php } ?>
		
		</tbody>
	</table>
</div>
<script src="/media/js/search.js"></script>
<?php include_once 'views/layout/'.$this->layout.'footer.php'; ?>