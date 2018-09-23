<?php
/**
 * Created by IntelliJ IDEA.
 * User: Cassiopeia
 * Date: 20.09.2018
 * Time: 14:17
 */

namespace App\Controller;


class HomeController
{
    public function index($id = '', $name = '')
    {

        echo 'This Class Worked ' . __CLASS__ . ' method ' . __METHOD__;
//        echo 'Moje id = '.$id.' nazwa podstrony '.$name;
//        $this->view(VIEW, [
//            'id'   => $id,
//            'name' => $name,
//        ]);
    }

    public function create()
    {
        echo 'This Class Worked ';

    }
}