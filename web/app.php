<?php

require_once __DIR__ . '/../core/bootstrap.php';

//var_dump( new \MonSiteWeb\Model\Category());
/**
 * @var $item \MonSiteWeb\Model\Item
 */
use RedBean_Facade as R;
$item=R::dispense("item");
$item->title='mon title';
echo '<pre>';
//var_dump($item);
R::store($item);


