<?php namespace Mkaz\Folder2;

/**
 * Created by PhpStorm.
 * User: Jauna Reklama
 * Date: 3/19/2017
 * Time: 4:43 PM
 */
class Homework3_3
{
    public function setMyname($name) {
        $this->myname = $name;
    }

    public function __debugInfo() {
        return [
            'test' => $this->myname,
        ];
    }
}