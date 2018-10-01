<?php
/**
 * Created by IntelliJ IDEA.
 * User: Cassiopeia
 * Date: 13.09.2018
 * Time: 14:24
 */

namespace App\Config;

use Illuminate\Container\Container;
use Illuminate\Database\Capsule\Manager as Capsule;
use Illuminate\Events\Dispatcher;

class Database
{
    public function __construct()
    {
        $capsule = new Capsule;

        $capsule->addConnection([
            'driver' => 'mysql',
            'host' => '192.168.1.1',
            'database' => 'magazyn',
            'username' => 'root',
            'password' => '',
            'charset' => 'utf8',
            'collation' => 'utf8_polish_ci',
            'prefix' => '',
        ], "default");
        $capsule->setEventDispatcher(new Dispatcher(new Container));

// Make this Capsule instance available globally via static methods... (optional)
        $capsule->setAsGlobal();

// Setup the Eloquent ORM... (optional; unless you've used setEventDispatcher())
        $capsule->bootEloquent();


        return $capsule;
    }
}