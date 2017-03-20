<?php namespace Mkaz\Folder2;

/**
 * Created by PhpStorm.
 * User: Jauna Reklama
 * Date: 3/19/2017
 * Time: 3:50 PM
 */
class Homework3_2 {
    private $myname;
    private $mysurname;

    public function setMyname($name) {
        $this->myname = $name;
    }

    public function getMyname() {
        return $this->myname;
    }

    public function setMysurname($surname) {
        $this->mysurname = $surname;
    }

    public function getMysurname() {
        return $this->mysurname;
    }

    public function __sleep() {
        return array("mysurname");
    }

    public function __wakeup() {
        $this->myname="Mykolas_waked_up";
    }

    public function __toString()
    {
        return "11 magic __toString is called. Value ".$this->myname." ".$this->mysurname."</br>";
    }

    function __invoke(){
        echo "12 magic __invoke is called for class homework3_2</br>";
    }




}