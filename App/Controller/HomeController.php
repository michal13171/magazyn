<?php
/**
 * Created by IntelliJ IDEA.
 * User: Cassiopeia
 * Date: 20.09.2018
 * Time: 14:17
 */

namespace App\Controller;


use App\Models\Product;
use Twig_Environment;
use Twig_Loader_Filesystem;

class HomeController extends Controller
{

    public function index()
    {

        $loader = new Twig_Loader_Filesystem(VIEW);
        $twig = new Twig_Environment($loader);
        $products = $this->model(Product::class);
        $products->name = 'Arek';
        $view = require VIEW . 'index.html.twig';

        //echo pr($twig->render(VIEW.'viewProduct/index.html', ['name' => $products->name]));
        return $twig->render($this->view('index.html'), ['name' => $products->name]);

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