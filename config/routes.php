<?php

/**
 * This file contains routes for the application.
 * 
 * PHP version 8
 * 
 * @category Config
 * @package  App\Config
 * @author   William Lönnberg <
 * @license  MIT License
 * @link     https://grapplingtracker.com
 */
use Phroute\Phroute\RouteCollector;
use App\Controllers\MainController;

return function (RouteCollector $router, $container) {
    $router->get(
        '/', function () {
            $controller = new MainController();
            return $controller->showFrontPage();
        }
    );
};