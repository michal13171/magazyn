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
        self::$validroute[] = $url;
        if (isset($_SERVER['QUERY_STRING'])) {

            if ($_SERVER['QUERY_STRING'] == 'args=' . $url) {
                $callback__func->__invoke();
            }
        }

//        if (isset($_REQUEST['args'])) {
//            if ($_REQUEST['args'] == 'args=' . $url) {
//                $callback__func->__invoke();
//            }
//        }

    }
}