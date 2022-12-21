<?php

//routing
$request = parse_url($_SERVER['REQUEST_URI'])['path'];

switch ($request){
    //page routes
    case '/':
        require_once './app/pages/index/index.php';
        break;
    case '/categories':
        require_once './app/pages/categories/categories.php';
        break;    
    case '/capture-gas':
        require_once './app/pages/capture-gas/capture-gas.php';
        break;
    case '/overview-gas':
        require_once './app/pages/overview-gas/overview-gas.php';
        break;
    case '/capture-power':
        require_once './app/pages/capture-power/capture-power.php';
        break;
    case '/overview-power':
        require_once './app/pages/overview-power/overview-power.php';
        break;
    case '/tips-power':
        require './app/pages/tips-power/tips-power.php';
        break;
    case '/tips-gas':
        require './app/pages/tips-gas/tips-gas.php';
        break;
    //database routes
    case '/post_category':
        require_once './database/post_category_form.php';
        break;
    case '/post_power':
        require_once './database/post_power_form.php';
        break;
    case '/post_gas':
        require_once './database/post_gas_form.php';
        break;
    case '/send-category-for-power-table':
        require './database/post_category_for_power_table_form.php';
        break;
    default:
        require './app/pages/404/404.php';
    }
