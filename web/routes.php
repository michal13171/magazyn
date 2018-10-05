<?php
/**
 * Created by IntelliJ IDEA.
 * User: Cassiopeia
 * Date: 20.09.2018
 * Time: 15:01
 */

use App\Config\Route;
use App\Controller\HomeController;

Route::set('', function () {
    $productController = new HomeController();
    $productController->index();
});

Route::set('product/create', function () {
    HomeController::create();
});
Route::set('product/create', function () {
    $productController = new HomeController();
    $productController->store();
});

if (isset($_GET['id'])) {
    Route::set('product?id=' . HomeController::edit($_GET['id']) . '/edit', function () {
        HomeController::edit($_GET['id']);
    });
}
if (isset($_GET['id'])) {
    Route::set('product?id=' . HomeController::update($_GET['id']) . '/edit', function () {
        HomeController::update($_GET['id']);
    });
}

