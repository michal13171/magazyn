<?php
namespace magazyn;

use Produkt;

include './assets/header.php';
include 'config/inc/navbar.html';

require 'config/class/FactoryForms.php';
include './config/autoload/autoloadClass.php';

?>

<div class="container-fluid">
    <div class="jumbotron jumbotron-fluid">
        <div class="col-3">
            <a class="btn btn-primary" href="#createProduct" rel="modal:open">
                Dodaj produkt
            </a>

        </div>
        <form class="form-inline my-2 my-lg-0">
            <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
        </form>
    </div>
    <table class="table table-hover table-dark">
        <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Product name</th>
            <th scope="col">Product barcode</th>
            <th scope="col">Product quantity</th>
            <th scope="col">Product weight</th>
            <th scope="col">Modify</th>
        </tr>
        </thead>
        <tbody>
        <?php
        $lp = 1;
        try {
            $db = new Produkt();
        } catch (Exception $e) {
            $e->getMessage();
        }
        $dataStaff = $db->getAll();

        foreach ($dataStaff->fetchAll() as $allData) {
            echo '<tr>
                    <th scope="row">' . $lp++ . '</th>
                    <td>' . $allData->name . '</td>
                    <td>' . $allData->barcode . '</td>
                    <td>' . $allData->quantity . '</td>
                    <td>' . $allData->weight . '</td>
                    <td>
                        <a class="btn btn-primary">Więcej</a>
                        <a class="btn btn-sm btn-danger"  href="/magazyn/config/inc/updateProduct.php?id='.$allData->id.'" rel="modal:open" >Modyfikuj</a>
                        <a href="?page=del&id=<?php echo $row->id_news; ?>" class="btn btn-sm btn-danger" onclick="return confirm(\'Czy chcesz usunac ten rekord?\')">Usuń</a>
                    </td>
                 </tr>';
        }

        ?>
    </table>
</div>

<?php
include './config/inc/storeProduct.php';

include './assets/footer.php';
?>
