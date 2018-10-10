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
use voku\helper\Paginator;

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

    public static function show($id)
    {
        $product = Product::find($id);
        if (isset($product)) {
            $idRemoveStr = $_GET['show'];
            $clean_id = preg_replace('#[^0-9]#', '', $idRemoveStr);
            echo self::view()->render('\viewProduct\show.php.twig', compact('product', 'clean_id'));
        }
    }

    public static function index($id = null)
    {
        $productsCat = Manager::select('SELECT * FROM products ');
        $pages = new Paginator('5', 'p');
        $pages->set_total(count($productsCat));
        $products = Manager::select('SELECT * FROM products ' . $pages->get_limit());
        echo self::view()->render('\viewProduct\index.php.twig', compact('products', 'pages'));
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

    public static function destroy($id)
    {
        $product = Manager::delete('DELETE FROM products WHERE id=?', [$id]);

        if ($product) {
            header("Location: /magazyn/public");
        } else {
            echo 'problem';
        }
    }
}