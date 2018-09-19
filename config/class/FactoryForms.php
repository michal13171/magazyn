<?php


/**
 * Created by IntelliJ IDEA.
 * User: Cassiopeia
 * Date: 13.09.2018
 * Time: 16:06
 */

interface formQuality
{
    function createForm($action, $method, $body, $nameForm);
}

/**
 * @property  arr
 */
class FactoryForm implements formQuality
{

    public function fieldFormProduct()
    {
        $barcode = (isset($this->getId()->barcode)) ? $this->getId()->barcode : "";
        $quantity = (isset($this->getId()->quantity)) ? $this->getId()->quantity : "";
        $weight = (isset($this->getId()->weight)) ? $this->getId()->weight : "";

        return '
  <div class="form-row">
    <div class="col-md-12 mb-12">
      <label for="barcode">Kod Kreskowy</label>
      <input type="text" name="barcode" class="form-control" id="barcode" placeholder="Kod kreskowy" required value=' . $barcode . '>
      <div class="valid-feedback">
        Looks good!
      </div>
    </div>
    </div>
      <div class="form-row">
        <div class="col-md-12 mb-12">
            <label for="quantity">Ilość</label>
            <input type="number" name="quantity" class="form-control" id="quantity" placeholder="Ilość" required value=' . $quantity . '>
                <div class="valid-feedback">Looks good!</div>
        </div>
    </div>
          <div class="form-row">
    <div class="col-md-12 mb-12">
      <label for="weight">Waga produktu</label>
      <input type="text" name="weight" class="form-control" id="weight" placeholder="Waga" required value=' . $weight . '>
      <div class="valid-feedback">
        Looks good!
      </div>
    </div>
    </div>
    <br>
';
    }

    public function createForm($action, $method, $body, $nameForm)
    {
        $name = (isset($this->getId()->name)) ? $this->getId()->name : "";

        return "<form action= $action method=$method  class='needs-validation' novalidate>
                    <div class='form-row'>
                        <div class='col-md-12 mb-12'>
                            <label for='name'>$nameForm </label>
                                <input type='text' name='name' class='form-control' 
                                id='name' 
                                required
                                placeholder=$nameForm
                                value=$name
                                >
                            <div class='valid-feedback'>Looks good!</div>
                        </div>
                    </div>
                 $body 
                    <button class='btn btn-primary' type='submit'>Wyślij formularz</button>
                </form>";
    }

    public function getId()
    {
        if (isset($_GET['id']) && !empty($_GET['id'])) {
            $id = (int)$_GET['id'];
            try {
                $getProduct = new Produkt();
            } catch (Exception $e) {
                echo $e->getMessage();
                die();
            }

            $stmt = $getProduct->getProduct($id);
            $arr = $stmt->fetch();
            return $arr;
        }
    }
}