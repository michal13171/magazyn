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
    $homeController = new HomeController();
    $homeController->index();
});
Route::set('home', function () {
    $homeController = new HomeController();
    $homeController->index();
});
Route::set('product', function () {
    $productController = new ProductController();
    $productController->index();

});