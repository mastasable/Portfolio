<?php

    session_start();

    $page = $_SERVER['REQUEST_URI'];
    $data = array();

    switch($page){
        case 'projects.php':
            $data['title'] = 'Мои работы';
            require_once 'projects.php';
            break;
        case 'feedback.php':
            $data['title'] = 'Связаться со мной';
            require_once 'feedback.php';
            break;
        default:
            $data['title'] = 'Сайт веб-разработчика';
            $data['page'] = 'index';
            require_once 'about.php';
            break;
    }