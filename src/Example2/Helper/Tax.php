<?php
/**
 * Created by PhpStorm.
 * User: gabornagy
 * Date: 2016. 11. 30.
 * Time: 15:28
 */

namespace Example2\Helper;


class Tax
{
    public static function getTaxRate()
    {
        return (string)self::getARandomTaxRate([27, 10]);
    }

    /**
     * @param $array
     * @return mixed
     */
    public function getARandomTaxRate($array)
    {
        shuffle($array);
        return $array[0];
    }
}