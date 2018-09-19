<?php
require '../class/FactoryForms.php';
require '../class/Produkt.php';

?>
<div class="modal-header">
    <h5 class="modal-title" id="exampleModalLabel">Modyfikuj produkt <?php echo (int)$_GET['id'] ?></h5>
    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
        <span aria-hidden="true">&times;</span>
    </button>
</div>
<div class="modal-body">
    <?php

    try {
        $db = new Produkt();
        $form = new FactoryForm();
    } catch (Exception $e) {
        $e->getMessage();
    }

    echo $form->createForm('http://localhost/magazyn/config/inc/updateProduct.php?id='.(int)$_GET['id'], 'post',  $form->fieldFormProduct(), 'Nazwa produktu');
    if (isset($_POST['name'])) {
        $id = (int)$_GET['id'];
        $name = trim(htmlentities($_POST['name']));
        $barcode = trim(htmlentities($_POST['barcode']));
        $quantity = trim(htmlentities($_POST['quantity']));
        $weight = trim(htmlentities($_POST['weight']));
        $update = $db->updateProduct($id, $name, $barcode, $quantity, $weight);
        if ($update){
            header('Location: ../../');
        }

    };
    ?>
</div>
