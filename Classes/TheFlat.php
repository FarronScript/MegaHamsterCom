<?php
/**
 * Created by PhpStorm.
 * User: Andi
 * Date: 01.10.2018
 * Time: 13:07
 */
require 'product.php';

class TheFlat extends product
{
    public function __construct()
    {
        parent::__construct(120, 80, 80, 149, array("Food jars"));
    }

    public function outputProductInfo()
    {
        echo "Our Domain ‘The Room’ is the more advanced choice of real estate for a \n
              hamster owner. It features a length of $this->length cm, a width of $this->width cm and a\n
              height of $this->height cm.\n
              It is available for the low price of EUR $this->price,-";
    }
}


/**
 * Testing TheRoom.php
 */
$myTheFlat = new TheFlat();
$myTheFlat->outputProductInfo();
$resultArray = $myTheFlat->getSpecialEquipment();
echo $resultArray[0];
$area = $myTheFlat->calculateArea();
echo $area." square cm";