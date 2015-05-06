<?php
/**
 * Created by PhpStorm.
 * User: ernest
 * Date: 06.05.15
 * Time: 12:34
 */
include("okna.php");
class class_okna {

    function place($vys, $shyr){
        $plosh=$vys*$shyr;
        return $plosh;
    }
    function summa($plosh, $stek, $profil, $pov){
        $pr=$profil*$plosh;
        $stoim_stekla=$plosh*100; // 100 - это стоим кв.метра стекла
        $sum=$stoim_stekla*$stek+$pr+$pov;
        return $sum;
    }

}