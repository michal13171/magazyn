<?php
/**
 * Created by IntelliJ IDEA.
 * User: Cassiopeia
 * Date: 20.09.2018
 * Time: 14:17
 */

namespace App\Controller;

use App\Models\Product;
use Illuminate\Database\Capsule\Manager;

class HomeController extends Controller
{


    public static function create()
    {
        echo self::view()->render('\viewProduct\create.php.twig');
    }

    public static function edit($id)
    {
        $product = Product::find($id);
        if (isset($product)) {
            $idRemoveStr = $_GET['id'];
            $clean_id = preg_replace('#[^0-9]#', '', $idRemoveStr);
            echo self::view()->render('\viewProduct\edit.php.twig', compact('product', 'clean_id'));
        }
    }

    public static function update($id)
    {
        $product = Product::find($id);
        if (isset($_POST['name'])) {

            $request = $product->update([
                'id' => $_POST['id'],
                'name' => $_POST['name'],
                'barcode' => $_POST['barcode'],
                'quantity' => $_POST['quantity'],
                'weight' => $_POST['weight']
            ]);
            if ($request) {
                header("Location: /magazyn/public");
            }
        }
    }

    public function index()
    {
        $products = Product::all();
        $productsCat = Manager::table('products')->take(5)->get();
        dump($_POST);

        if (isset($_GET['args'])) {
            dump($_GET['args']);
//        dump($products->reject(function ($products){
//echo $products;
//        }));
            //echo $this->view()->render('\viewProduct\index.php.twig', compact('products', 'productsCat'));
        }
        echo $this->view()->render('\viewProduct\index.php.twig', compact('products', 'productsCat'));

    }

    public function store()
    {
        if (isset($_POST['name'])) {
            $request =
                Product::insert([
                    'name' => $_POST['name'],
                    'barcode' => $_POST['barcode'],
                    'quantity' => $_POST['quantity'],
                    'weight' => $_POST['weight']
                ]);
            if ($request) {
                header("Location: /magazyn/public");
            }
        }
    }

    public function destroy()
    {
        echo 'This Class Worked ';

    }
}