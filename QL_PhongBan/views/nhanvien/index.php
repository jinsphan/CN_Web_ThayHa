<?php include_once 'views/layout/'.$this->layout.'header.php'; ?>
<div class="nhanvien-container">
    <div class="nhanvien-control">
        <div class="row">
            <div class="col-md-7">
                <a href="<?= html_helper::url(["ctl" => "nhanvien", "act" => "add"]) ?>" ><button class="btn-common">+</button></a>
            </div>
            <div class="col-md-5">
                <div class="input-group">
                    <div class="input-group-btn search-panel">
                        <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
                            <span id="search_concept">Filter by</span> <span class="caret"></span>
                        </button>
                        <ul class="dropdown-menu" role="menu">
                            <li><a key="ALL" href="#">Tất cả</a></li>
                            <li><a key="MA_NV" href="#">Mã nhân viên</a></li>
                            <li><a key="TEN_NV" href="#">Tên nhân viên</a></li>
                            <li><a key="DIA_CHI_NV" href="#">Địa chỉ nhân viên</a></li>
                            <li><a key="PB_NV" href="#">Phòng ban nhân viên</a></li>
                        </ul>
                    </div>
                    <input type="hidden" name="search_param" value="all" id="search_param">         
                    <input id="input-search" type="text" class="form-control" name="x" placeholder="Search term...">
                    <span class="input-group-btn">
                        <button id="btn-search-nhanvien" class="btn btn-default" type="button"><span class="glyphicon glyphicon-search"></span></button>
                    </span>
                </div>
            </div>
        </div>
    </div>
    <br>

    <?php include_once("views/nhanvien/table.php"); ?>
	
</div>
<script src="/media/js/search.js"></script>
<?php include_once 'views/layout/'.$this->layout.'footer.php'; ?>