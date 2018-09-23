<?php
/**
 * Created by IntelliJ IDEA.
 * User: Cassiopeia
 * Date: 16.09.2018
 * Time: 14:34
 */
spl_autoload_register(function ($class) {
    $fileClass = ROOT . $class . '.php';
    if (file_exists($fileClass)) {
        require $fileClass;
    } else {
        throw new Exception("file {$fileClass} not found...");
    }
});
