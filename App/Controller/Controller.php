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
        return new $model;
    }

    public function view()
    {
        $loader = new Twig_Loader_Filesystem(VIEW);
        $twig = new Twig_Environment($loader);
        return $twig;
    }
}