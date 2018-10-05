<?php
/**
 * Created by IntelliJ IDEA.
 * User: Cassiopeia
 * Date: 19.09.2018
 * Time: 16:21
 */

namespace App\Controller;

use Twig_Environment;
use Twig_Loader_Filesystem;

class Controller
{
    public function model($model)
    {
        require_once $model . '.twig';
        return new $model;
    }

    public function valid($valid)
    {
        require_once $valid . '.php';
        return new $valid;
    }

    public function request($model)
    {
        require_once $model . '.twig';
        return new $model;
    }
    public function view()
    {
        $loader = new Twig_Loader_Filesystem([VIEW, VIEW . 'inc/']);
        $twig = new Twig_Environment($loader);

        return $twig;
    }
}