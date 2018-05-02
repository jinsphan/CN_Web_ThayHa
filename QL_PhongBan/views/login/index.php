<?php include("views/layout/header.php") ?>
<body>
    <div class="login-container">
        <h1>Please Login</h1>
        <br>
        <form action="<?php echo html_helper::url(["ctrl" => "login"]); ?>" method="POST">
            <div class="form-inline">
                <label for="input-username">Username: </label>
                <input type="text" class="form-control" id="input-username"  placeholder="Nhập username" name="username">
                <small id="username-help" class="form-text text-muted"></small>
            </div>

            <div class="form-inline">
                <label for="input-password">Password: </label>
                <input type="password" class="form-control" id="input-password"  placeholder="Nhập password" name="password">
                <small id="password-help" class="form-text text-muted"></small>
            </div>
            <br>    
            <div class="form-inline">
                <button class="btn" type="submit" >Login</button>
            </div>
            <!-- <table class="table">
                <tbody>
                    <tr>
                        <td>Username:</td>
                        <td><input type="text" name="username" ></td>
                    </tr>
                    <tr>
                        <td>Username:</td>
                        <td><input type="password" name="password" ></td>
                    </tr>
                    <tr>
                        <td><input class="btn btn-primary" type="submit" name="btn_submit_user"></td>
                    </tr>
                </tbody>
            </table> -->
        
        </form>
    </div>
</body>
</html>