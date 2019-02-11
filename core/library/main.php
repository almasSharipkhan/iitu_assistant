<?php
    function get_url_segment($n) {
        $url = explode('/', $_GET['url']);
        return $url[$n];
    }

    function get_404_page() {
        render('404', ['title' => '404']);
    }

    function render($view, $data) {
        require 'core/views/layouts/' . $view . '.php';
    }