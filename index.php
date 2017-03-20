<?php
/**
 * Created by PhpStorm.
 * User: Jauna Reklama
 * Date: 3/19/2017
 * Time: 1:57 PM
 */
echo "Homework3 Mykolas Kazlauskas</br></br></br>";
require_once('vendor/autoload.php');

use Mkaz\Folder1;
use Mkaz\Folder2\Homework3_1;
use Mkaz\Folder2\Homework3_2;
use Mkaz\Folder2\Homework3_3;
$hw3=new Mkaz\Folder1\homework3();
$hw3_1=new Mkaz\Folder2\Homework3_1();
$hw3_2=new Mkaz\Folder2\Homework3_2();
$hw3_3=new Mkaz\Folder2\Homework3_3();
$hw3->test('mykolas');
$hw3->testa('calling not existing function');
$hw3::testa('calling not existing function');
echo "5. _get is called for getting private value ".$hw3->private_var."</br>";
$hw3->unexisting="abc";
isset($hw3_1->somevariable);
unset($hw3_1->somevariable);
echo"</br>***Testing __sleep and __wakeup***</br>";
$hw3_2->setMyname("Mykolas");
$hw3_2->setMysurname("Kazlauskas");
$testdata=serialize($hw3_2);
echo "Serialized with slept value name ".$testdata."</br>";
$unserialized=unserialize($testdata);
echo "Unserialized data with waked up myname:</br>";
var_dump($unserialized);
echo"</br>***End testing __sleep and __wakeup***</br>";
echo $hw3_2;
//calling __invoke()
$hw3_2();
echo"***testing clone**</br>";
$hw3_2_1=clone $hw3_2;
$hw3_2_1->setMyname("mykolas");
echo "13 magic _clone result: ".$hw3_2_1->getMyname()."</br>";
echo "14 magic __debugInfo result: ";
$value=$hw3_3->setMyname('mk');
var_dump($hw3_3);
echo"</br>";