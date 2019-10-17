<?php

use Animals\Cat;
use Animals\Collar;

require '../src/Cat.php';
require '../src/Collar.php';

$collar = new Collar(10, 'red');
$isidor = new Cat('Isidor', 'orange', $collar);
$carbone = new Cat('Carbone', 'blue');

$carbone->setTiredness(10);
$carbone->setImage('https://s2.qwant.com/thumbr/0x380/c/3/ccfbab5861f976462dbcb9e69ff25b3c51a0559dc846ad1e9cd328faaf0a59/chat-noir%2B1.jpg.JPG?u=http%3A%2F%2F3.bp.blogspot.com%2F-eJdzqPpjbHA%2FVmBpk9T9LNI%2FAAAAAAAAO6c%2F9E--pXOqoK0%2Fs1600%2Fchat-noir%252B1.jpg.JPG&q=0&b=1&p=0&a=1');
$isidor->setImage('https://s1.qwant.com/thumbr/0x380/3/d/0b832440c9c8db80f8baa2d8cdc0a7b34ff7d6fa6cd6d05d5c39e3dfb91f4a/7753607556_isidore-alias-heathcliff-a-eu-droit-a-une-serie-animee-dans-les-annees-80.jpg?u=http%3A%2F%2Fmedia.rtl.fr%2Fcache%2FW9D7tnu9m1vIKSbQp454mQ%2F880v587-0%2Fonline%2Fimage%2F2012%2F1018%2F7753607556_isidore-alias-heathcliff-a-eu-droit-a-une-serie-animee-dans-les-annees-80.jpg&q=0&b=1&p=0&a=1');

echo 'carbone';
while($carbone->getTiredness() < Cat::TIREDNESS_MAX){
    $carbone->walk();
    echo 'walk ' . $carbone->getTiredness() . '<br/>';
}

$carbone->eat();
$carbone->eat();

echo 'isidor';
while(!$isidor->isTired()) {
    $isidor->walk();
    echo 'walk ' . $isidor->getTiredness() . '<br/>';
}

var_dump($isidor);
var_dump($carbone);