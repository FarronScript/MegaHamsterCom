<?php
/**
 * Created by PhpStorm.
 * User: Andi
 * Date: 01.10.2018
 * Time: 12:37
 */

abstract class product
{
    protected $length;
    protected $width;
    protected $height;
    protected $price;
    protected $specials;


    function __construct($length, $width, $height, $price, $specials) {
        $this->length = $length;
        $this->width = $width;
        $this->height = $height;
        $this->price = $price;
        $this->specials = $specials;
    }

    abstract public function outputProductInfo();


    public function getSpecialEquipment()
    {
        return $this->specials;
    }


    public function calculateArea (
    ) {
        $area = $this->length * $this->width;
        echo $area." square cm";
    }


}