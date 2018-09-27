<?php
/**
 * Created by IntelliJ IDEA.
 * User: Cassiopeia
 * Date: 20.09.2018
 * Time: 15:01
 */


use App\Config\Route;
use App\Controller\HomeController;
use App\Controller\ProductController;

Route::set('', function () {
    echo 'działa';
});
Route::set('home', function () {
    new HomeController();
});
Route::set('product', function () {
    new ProductController();
});