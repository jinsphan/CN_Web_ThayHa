<!DOCTYPE html>
<html lang="vi">

<?php include("views/layout/head.php"); ?>

<body role="document" cz-shortcut-listen="true">

    <!-- Fixed navbar -->
    <nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="/home">Management LABS system</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav navbar-right">
            <li><a href="<?php echo html_helper::url(array('ctl'=>'user')); ?>">QUẢN LÍ USER</a></li>
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fas fa-bars"></i></a>
              <ul class="dropdown-menu" role="menu">
                <?php if (!isset($_SESSION['loginUser']['username'])) {  ?>
                <li><a href="<?php echo html_helper::url(["ctl" => "login"]); ?>">Login</a></li>
                <?php } else { ?>
                  <li><a href="<?php echo html_helper::url(["ctl" => "login", "act" => "logout"]); ?>">Logout</a></li>
                <?php } ?>
              </ul>
            </li>
          </ul>
        </div>
      </div>
    </nav>

    <div class="container theme-showcase" role="main">
