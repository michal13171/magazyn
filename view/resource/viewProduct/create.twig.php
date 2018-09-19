<div id="createProduct" class="modal">
    <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Dodaj produkt</h5>

    </div>
    <div class="modal-body">

        <?php
        try {
            $db = new Produkt();
        } catch (Exception $e) {
            $e->getMessage();
        }
        try {
            $form = new FactoryForm();
        } catch (Exception $e) {
            $e->getMessage();
        }
        echo $form->createForm($_SERVER['PHP_SELF'], 'POST', $form->fieldFormProduct(), 'Nazwa produktu');
        if (isset($_POST['name'])) {
            $name = trim(htmlentities($_POST['name']));
            $barcode = trim(htmlentities($_POST['barcode']));
            $quantity = trim(htmlentities($_POST['quantity']));
            $weight = trim(htmlentities($_POST['weight']));
            $addProduct = $db->storeProduct($name, $barcode, $quantity, $weight);
        }
        ?>
    </div>
</div>