<?php
/**
 * Created by IntelliJ IDEA.
 * User: Cassiopeia
 * Date: 24.09.2018
 * Time: 13:58
 */

namespace App\Controller;

class ProductController
{
    public function __construct()
    {
        $this->index();
    }

    public function index()
    {
        echo 'Klasa = ' . __CLASS__;
    }
}