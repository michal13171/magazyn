<?php
/**
 * Created by IntelliJ IDEA.
 * User: Cassiopeia
 * Date: 29.09.2018
 * Time: 11:12
 */

function getAllProducts()
{
    $results = app('db')->select("SELECT * FROM products");
    return $results;

}