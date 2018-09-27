<?php
/**
 * Created by IntelliJ IDEA.
 * User: Cassiopeia
 * Date: 19.09.2018
 * Time: 16:21
 */

namespace App\Controller;

use App\Config\Database;
use App\Config\View;

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
        $this->view = new View($view_name, $data);
        pr($this->view);
        return $this->view;
    }

}