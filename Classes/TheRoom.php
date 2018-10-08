<?php
/**
 * Created by PhpStorm.
 * User: Andi
 * Date: 01.10.2018
 * Time: 13:07
 */
require 'product.php';

class TheRoom extends product
{
    public function __construct()
    {
        parent::__construct(80, 50, 50, 49, array("none"));
    }

    public function outputProductInfo()
    {
        echo "Our Domain ‘The Room’ is the basic choice of real estate for a \n
              hamster owner. It features a length of $this->length cm, a width of $this->width cm and a\n
              height of $this->height cm.\n
              It is available for the low price of EUR $this->price,-";
    }
}


/**
 * Testing TheRoom.php
 */
$myTheRoom = new TheRoom();
$myTheRoom->outputProductInfo();
$area = $myTheRoom->calculateArea();
echo $area." square cm";