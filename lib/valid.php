<?php
class valid {
    public static function Validation($vys,$shyr){
//        if (preg_match('/^[0-9]+$/', $vys) and preg_match('/^[0-9]+$/', $shyr)){
//            $chek=true;
//        }
//        else{
//            $chek=false;
//        }
        return preg_match('/^[0-9]+$/', $vys) and preg_match('/^[0-9]+$/', $shyr);
    }
}