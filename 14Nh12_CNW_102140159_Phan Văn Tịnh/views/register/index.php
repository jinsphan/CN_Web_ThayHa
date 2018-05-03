<?php include("views/layout/header.php") ?>
<body>
    <div class="login-container">
        <h1>Register</h1>
        <br>
        <form action="<?php echo html_helper::url(["ctrl" => "register"]); ?>" method="POST">
            <div class="form-inline">
                <label for="input-username">Username: </label>
                <input type="text" class="form-control" id="input-username"  placeholder="Nhập username" name="username">
                <small id="username-help" class="form-text text-muted"></small>
            </div>

            <div class="form-inline">
                <label for="input-firstname">First name: </label>
                <input type="text" class="form-control" id="input-firstname"  placeholder="Nhập username" name="firstname">
                <small id="firstname-help" class="form-text text-muted"></small>
            </div>

            <div class="form-inline">
                <label for="input-lastname">Last name: </label>
                <input type="text" class="form-control" id="input-lastname"  placeholder="Nhập username" name="lastname">
                <small id="lastname-help" class="form-text text-muted"></small>
            </div>

            <div class="form-inline">
                <label for="input-password">Password: </label>
                <input type="password" class="form-control" id="input-password"  placeholder="Nhập password" name="password">
                <small id="password-help" class="form-text text-muted"></small>
            </div>
            <br>    
            <div class="form-inline">
                <button class="btn" type="submit" >Register</button>
            </div>
        </form>
    </div>
</body>
</html>