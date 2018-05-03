<?php include("views/layout/header.php") ?>
<body>
    <br>
    <br>
    
    <div style="text-align: center" class="login-container">
        <p style="color: red">Username or password incorrect!</p>
        <a href="<?php echo html_helper::url(["ctrl" => "login"]); ?>">Try again!</a>
        or
        <a href="/register">Create new account!</a>        
    </div>
</body>
</html>