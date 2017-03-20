<?php namespace Mkaz\Folder2;

/**
 * Created by PhpStorm.
 * User: Jauna Reklama
 * Date: 3/19/2017
 * Time: 3:42 PM
 */
class Homework3_1
{
    public function __isset($name) {
        echo "7 magic __isset is called for non-existent property '$name' </br>";
    }

    public function __unset($name) {
        echo "8 magic __isset is called for non-existent property '$name' </br>";
    }


}