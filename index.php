<?php
/**
 * Created by PhpStorm.
 * User: alex
 * Date: 01.04.18
 * Time: 11:31
 */


require_once 'methods/Autoloader.php';

$product1 = new BookProduct('Собачье сердце' , 'Булгаков'  , 'Михаил' , 5.99 , 311);


$product2 = new CDProduct( 'Химера', 'Ария', 'Группа' , 10.99 , 60);
//echo $product1->getSummaryLine();
//echo $product2->getSummaryLine();




//echo 'Автор: ' . $product1->getProducer() .'<br>';

//echo 'Исполнитель: '. $product2->getProducer() .'<br>';
$writer = new ShopProductWriter();
$writer->addProduct($product1);
$writer->addProduct($product2);
//var_dump($writer);
$writer->write();




