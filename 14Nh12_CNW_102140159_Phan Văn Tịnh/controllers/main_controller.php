<?php
    class main_controller extends vendor_main_controller {
        public function __construct() {
            global $app;
            // $this->checkAuth();
            $rolesFlip = array_flip($app['roles']);
            if (!isset($_SESSION['loginUser']['username'])) {
                // header( "Location: ".html_helper::url(array('ctl'=>'login')));
            }
            parent::__construct();
        }

        public function requireAuth() {
            if (!isset($_SESSION['loginUser']['username'])) {
                header( "Location: ".html_helper::url(array('ctl'=>'login')));
                die();
            }
        }
    }
?>