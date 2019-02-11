<?php
    function action_index() {
        render('index', ['title' => 'Index Page']);
    }

    function action_login() {
        $con = connectDB();
        $users = getAll('users');
    }

    function action_registration() {
        $con = connectDB();
        $users = getAll('users');
    }
