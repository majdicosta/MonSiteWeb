<?php

require_once __DIR__ .'/../../../core/bootstrap.php';
use RedBean_Facade as R;
var_dump($argv[1]); die;

$itemFixtures=new \MonSiteWeb\DataFixtures\ItemFixture();

$type= $itemFixtures->getTypes();
$fixtures= $itemFixtures->getFixtures();

foreach($fixtures as $fixture){
    $item=R::dispense($type);
    foreach($fixture as $property=>$value){
        $item->$property=$value;

    }
    R::store($item);
}

