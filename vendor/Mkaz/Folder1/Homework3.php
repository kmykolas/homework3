<?php namespace Mkaz\Folder1;

/**
 * Created by PhpStorm.
 * User: Jauna Reklama
 * Date: 3/19/2017
 * Time: 1:57 PM
 */
class Homework3
{
    protected  $private_var="privati reiksme";

    function __construct() {
        print "1. Magic __construct is working</br>";
    }

    function test($args=""){
        echo "simmple test with argument value:".$args."</br>";
    }

    function __call( $method, $args ){

        echo '3. magic _call is called. ' . $method . ' does not exist</br>' ;

    }

    static function __callstatic( $method, $args ){

        echo '4. magic __callstatic is called. ' . $method . ' does not exist</br>' ;

    }

    public function __get($property)
    {
        if (property_exists($this, $property)) {
            return $this->$property;
        }
    }

    public function __set($property, $value)
    {
        echo "6 magic __set is called for ".$property." with value ".$value."</br>";
    }

    function __destruct() {
        print "2. Magic __destruct is called</br>";
    }

}