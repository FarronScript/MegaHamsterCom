<?php
/**
 * Created by PhpStorm.
 * User: Andi
 * Date: 01.10.2018
 * Time: 13:07
 */
require 'product.php';

class ThePit extends product
{
    protected $sidelength;

    public function __construct()
    {
        parent::__construct(null, null, null, 69, array("Hamster training
            gloves", "Hamster punching sack"));
        $this->sidelength = 20;
    }

    public function outputProductInfo()
    {
        echo "Our Domain ‘The Room’ is the epic gamers choice of real estate for a \n
              hamster owner. It features a side length of $this->sidelength cm.
              It is available for the low price of EUR $this->price,-";
    }

    public function calculateArea()
    {
        return (3*sqrt(3) * $this->sidelength^2)/2;
    }

}


/**
 * Testing TheRoom.php
 */
$myThePit = new ThePit();
$myThePit->outputProductInfo();
$resultArray = $myThePit->getSpecialEquipment();
echo $resultArray[0];
echo $resultArray[1];
$area = $myThePit->calculateArea();
echo $area." square cm";
