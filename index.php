<?php
    session_start();

    echo $_GET['url'];
    require 'core/library/main.php';
    require 'core/library/assets.php';

    if(!empty(get_url_segment(0))) {
        $controller_name = get_url_segment(0);
    } else {
        $controller_name = 'main';
    }

    if(!empty(get_url_segment(1))) {
        $action_name = 'action_' . get_url_segment(1);
    } else {
        $action_name = 'action_index';
    }
    $path = "core/controllers/" . $controller_name . '.php';
    if(file_exists($path)){
        require_once $path;
        if(function_exists($action_name)) {
            $action_name();
        } else {
            get_404_page();
        }
    } else {
        get_404_page();
    }