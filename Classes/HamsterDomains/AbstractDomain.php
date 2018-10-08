<?php
/**
 * Created by PhpStorm.
 * User: Andi
 * Date: 08.10.2018
 * Time: 12:43
 */

namespace HTL3R\MegaHamsterCom\HamsterDomains;

class AbstractDomain{
    var $name;

    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }
}