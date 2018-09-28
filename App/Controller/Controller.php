<?php
/**
 * Created by IntelliJ IDEA.
 * User: Cassiopeia
 * Date: 19.09.2018
 * Time: 16:21
 */

namespace App\Controller;

use App\Config\Database;
use Twig_Environment;
use Twig_Loader_Filesystem;

class Controller extends Database
{

    public function model($model)
    {
        require_once $model . '.php';
        //  pr(file_exists(MODEL . $model . '.php')? Product::class: 'nie prawda');
        return new $model;
    }

    public function view($view_name, $data = [])
    {
        require VIEW . $view_name . '.twig';
    }

    public function renderRoute($view_name, $data = null)
    {
        $loadView = require VIEW . $view_name . '.html';
        $loader = new  Twig_Loader_Filesystem($loadView);
        pr($loader);
        $twig = new Twig_Environment($loader);
        return $twig;
    }
}