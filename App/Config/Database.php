<?php
/**
 * Created by IntelliJ IDEA.
 * User: Cassiopeia
 * Date: 13.09.2018
 * Time: 14:24
 */

namespace App\Config;

use PDO;
use PDOException;

abstract class Database
{
    protected $pdo;
    private static $engineDB = "mysql";
    private static $localHost = "127.0.0.1";
    private static $port = "3306";
    private static $encoding = "utf-8";
    private static $db_name = "magazyn";
    private static $user = "root";
    private static $password = "";

    /**
     * DBConnect constructor.
     */
    public function __construct()
    {
        $dsn = self::$engineDB . ':host=' . self::$localHost . ';port=' . self::$port . ';encoding=' . self::$encoding . ';dbname=' . self::$db_name;
        try {
            $this->pdo = new PDO($dsn, self::$user, self::$password);
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