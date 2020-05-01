<?php

    class main {
        private $data = array();
        function __construct() {
            session_start();
            if(isset($_SESSION) && !empty($_SESSION) && isset($_SESSION['user_id']) && !empty($_SESSION['user_id']))
            {
                $this->data = $_SESSION;
            }
        }

        function home() {
            loadView('header', ['title' => 'Home - Discipline']);
            loadView('home');
            loadView('footer');
        }

    }
?>