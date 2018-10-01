<?php
/**
 * Created by IntelliJ IDEA.
 * User: Cassiopeia
 * Date: 20.09.2018
 * Time: 14:17
 */

namespace App\Controller;


use App\Models\Product;

class HomeController extends Controller
{
    public function index()
    {
        $products = Product::all();
        echo $this->view()->render('\viewProduct\index.twig.php', ['products' => $products]);

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