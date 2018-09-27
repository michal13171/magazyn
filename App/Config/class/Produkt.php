<?php /** @noinspection ALL */

/**
 * Created by IntelliJ IDEA.
 * User: Cassiopeia
 * Date: 13.09.2018
 * Time: 17:36
 */


require 'Database.php';
interface cmsProductsObserver{
    public function getAll();
    public function get( cmsProductsObservable $observer);
    public function store(cmsProductsObservable $observer);
}
abstract class  cmsProductsObservable {
    private $observers = array();

    public function add(cmsProductsObserver $observer) {
        $this->observers[] = $observer;
    }
    public function update(cmsProductsObserver $observer) {

        foreach($this->observers as $okey => $oval) {
            if ($oval == $observer) {
                unset($this->observers[$okey]);
            }
        }
    }
    public function notifyCallUser() {
        foreach($this->observers as $obs)
            $obs->getAll();
            $obs->get($this);
            $obs->store($observers);
    }
}

class Produkt extends DBConnect implements cmsProductsObserver
{
    private $id;
    private $name;
    private $barcode;
    private $quantity;
    private $weight;

    public function getAll(){
       return $this->getAllProducts();
    }
    public function get(cmsProductsObservable $observable){
        $this->getId();
        return $this->getProduct($observable->getId());
    }
    public function store(cmsProductsObservable $observable){
        return $this->storeProduct( $observable->getName(), $observable->getBarcode(),$observable->getQuantity(),$observable->getWeight());
    }
    public function getAllProducts(): PDOStatement
    {
        $sql = 'SELECT * FROM magazyn.products';
        $query = $this->pdo->prepare($sql);
        $query->execute();
        return $query;
    }

    public function getProduct(int $id): PDOStatement
    {
        $sql = 'SELECT * FROM magazyn.products WHERE id=:id';
        $query = $this->pdo->prepare($sql);
        $query->bindValue(':id', $id, PDO::PARAM_INT);
        $query->execute();
        return $query;
    }

    public function storeProduct(string $name, string $barcode, int $quantity, string $weight): PDOStatement
    {
        $sql = 'INSERT INTO magazyn.products (name, barcode, quantity, weight)
VALUES (:name, :barcode, :quantity, :weight)';
        $query = $this->pdo->prepare($sql);
        $query->bindValue(':name',$name , PDO::PARAM_STR);
        $query->bindValue(':barcode', $barcode, PDO::PARAM_STR);
        $query->bindValue(':quantity', $quantity, PDO::PARAM_INT);
        $query->bindValue(':weight', $weight);
        $query->execute();
        return $query;
    }

    public function updateProduct(int $id, string $name, string $barcode, int $quantity, string $weight): bool
    {

        $sql = 'UPDATE magazyn.products SET name=:name, barcode=:barcode, quantity=:quantity, weight=:weight WHERE id=:id';
        $query = $this->pdo->prepare($sql);
        $query->bindValue(':id', $id, PDO::PARAM_INT);
        $query->bindValue(':name', $name, PDO::PARAM_STR);
        $query->bindValue(':barcode', $barcode, PDO::PARAM_STR);
        $query->bindValue(':quantity', $quantity, PDO::PARAM_INT);
        $query->bindValue(':weight', $weight);
        $result = $query->execute();
        return $result;
    }

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @return mixed
     */
    public function getBarcode()
    {
        return $this->barcode;
    }

    /**
     * @return mixed
     */
    public function getQuantity()
    {
        return $this->quantity;
    }

    /**
     * @return mixed
     */
    public function getWeight()
    {
        return $this->weight;
    }
}
