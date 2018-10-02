<?php
/**
 * Created by IntelliJ IDEA.
 * User: Cassiopeia
 * Date: 26.09.2018
 * Time: 17:10
 */

namespace App\Config;

class Route
{
    public static $validroute = array();

    public function set($url, $callback__func)
    {
        self::$validroute[] = filter_var(trim($url), FILTER_SANITIZE_URL);
        if (isset($_SERVER['QUERY_STRING'])) {

            if ($_SERVER['QUERY_STRING'] == 'args=' . $url || $_SERVER['QUERY_STRING'] == $url) {
                $callback__func->__invoke();
            }
        }

    }
}