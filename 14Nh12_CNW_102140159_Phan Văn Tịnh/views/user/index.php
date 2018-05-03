<?php include_once 'views/layout/'.$this->layout.'header.php'; ?>
<div class="user-container">
	<h1>USER MANAGEMENT</h1>
    <?php if ($_SESSION['loginUser']['role'] == '1') { ?>
        <h3>Form search</h3>
        <div class="form-inline">
            <input type="text" class="form-control" id="input-name-search"  placeholder="Nhập name">
        </div>
        <br>
        <?php include 'views/user/tableSearch.php'; ?>
        <br>
        <h3>All Users</h3>
        <?php include 'views/user/table.php'; ?>
    <?php } ?>
</div>
<script src="media/js/form_search.js"></script>
<?php include_once 'views/layout/'.$this->layout.'footer.php'; ?>