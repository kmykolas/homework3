<?php
/**
 * Created by PhpStorm.
 * User: Jauna Reklama
 * Date: 3/19/2017
 * Time: 7:14 PM
 */

$di = new RecursiveDirectoryIterator(__DIR__,RecursiveDirectoryIterator::SKIP_DOTS);
$it = new RecursiveIteratorIterator($di);

foreach($it as $file) {
    if (pathinfo($file, PATHINFO_EXTENSION) == "php") {
        require_once($file);
    }
}

