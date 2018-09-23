<?php
/**
 * Created by IntelliJ IDEA.
 * User: Cassiopeia
 * Date: 19.09.2018
 * Time: 16:21
 */

namespace App\Controller;

use App\Config\View;

class Controller
{
    public function view($view_name, $data = [])
    {
        $this->view = new View($view_name, $data);
        pr($this->view);
        return $this->view;
    }

}