<?php
/**
 * Created by IntelliJ IDEA.
 * User: Cassiopeia
 * Date: 19.09.2018
 * Time: 16:42
 */

namespace App\Controller;

class ExceptionClass extends \Exception
{

    public function __construct($s)
    {
        try{
            $s;
        }catch (\Exception $e){
            $e->getMessage();
        }
    }

}