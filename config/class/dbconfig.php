<?php
/**
 * Created by IntelliJ IDEA.
 * User: Cassiopeia
 * Date: 13.09.2018
 * Time: 14:24
 */

abstract class DBConnect
{
    protected $pdo;

    /**
     * DBConnect constructor.
     */
    public function __construct()
    {
        $dsn = 'mysql:host=localhost;port=3306;encoding=utf-8;dbname=magazyn'; // database server name
        try {
            $this->pdo = new PDO($dsn, 'root', '');
            $this->pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ);
            $this->pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $this->pdo->query("SET NAMES 'utf8'");
        } catch (PDOException $e) {
            die('Wystapił błąd: ' . $e->getMessage());
        }
    }

    public function __destruct()
    {
        $this->pdo = null;
    }
}