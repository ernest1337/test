<?php
/**
 * Created by PhpStorm.
 * User: ernest
 * Date: 06.05.15
 * Time: 11:00
 */

class Class1 {

    function __construct($str) {
        $this->strArray = preg_split("/[\s,!?.:-]+/",$str);
    }

    public $strArray;

    public function deCod($str) {
        return iconv('UTF-8', 'windows-1251', $str);
    }

    public function startCount() {
        return count($this->strArray);
    }

    public function run() {
        $newArray = array();

        foreach ($this->strArray as $key => $value) {
            $num = (strlen($this->deCod($value)));
            if ($num) {
                $newArray[$num][] = $value;
            }
        }
        return $newArray;
    }
}