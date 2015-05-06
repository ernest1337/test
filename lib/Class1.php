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

    public function Func($str){

//        echo "Предложение: " . "<b>" .$str . "</b>" . "<br>";
//        $keywords = preg_split("/[\s,!?.:-]+/",$str);//переводит предложение в массив, убирая знаки
//        $count = count($keywords);


//        echo "Общее кол-во слов: " . "<b>" . ($count) . "</b>" . "<br>";
//        $newArray = array();
//        foreach ($keywords as $key => $value) {
//            $num = (strlen(iconv('UTF-8', 'windows-1251', $value)));
//            if ($num) {
//                $newArray[$num][] = $value;
//            }
//        }
//        ksort($newArray);
//        foreach ($newArray as $key => $value) {
//            echo "<br>" . "Все слова, состоящие из " . "<b>" . $key . "</b>" . " букв: " . "<b>" . count($value) . "</b>" . 'шт - ' . implode(", ", $value);
//            "</br>";
//        }
//        return $newArray;
    }

}