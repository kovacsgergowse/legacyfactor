<?php
/**
 * Created by PhpStorm.
 * User: gabornagy
 * Date: 2016. 11. 30.
 * Time: 15:26
 */

namespace Example2;


class Price
{
    public function calculateGross($net)
    {

        return intval($net) * ((Tax::getTaxRate() % 100) +1);

    }
}