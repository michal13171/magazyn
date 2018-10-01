<?php
/**
 * Created by IntelliJ IDEA.
 * User: Cassiopeia
 * Date: 27.09.2018
 * Time: 17:53
 */

namespace App\Config;


class App
{
    public function __construct()
    {
        $this->parse_utl();
    }

    public function parse_utl()
    {

        require ROOT . '/web/routes.php';

    }
}