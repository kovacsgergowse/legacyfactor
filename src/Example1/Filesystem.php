<?php

namespace Example1;
/**
 * Created by PhpStorm.
 * User: gabornagy
 * Date: 2016. 11. 30.
 * Time: 13:09
 */
class Filesystem
{

    /**
     * @param $path
     * @return array
     */
    public function lowerCase($path)
    {

        $entries = $this->globPath($path);

        return $this->lowerCaseAnArray($entries);

    }

    /**
     * @param $path
     * @return array
     */
    public function globPath($path)
    {
        return glob($path);
    }

    /**
     * @param $array
     * @return array
     */
    public function lowerCaseAnArray($array)
    {
        $result = [];

        foreach ($array as $item) {
            $result[] = strtolower($item);
        }

        return $result;
    }

}