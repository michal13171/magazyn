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
    public function __construct()
    {
        $this->index();
    }

    public function index()
    {
        $data = __FUNCTION__;
        $view = require VIEW . 'index.php';
        return $view;
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

    public function store()
    {
        echo 'This Class Worked ';

    }

    public function edit()
    {
        echo 'This Class Worked ';

    }

    public function update()
    {
        echo 'This Class Worked ';

    }

    public function destroy()
    {
        echo 'This Class Worked ';

    }
}