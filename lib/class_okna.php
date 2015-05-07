<?php

include("okna.php");

abstract class okna {

    public $vysota;
    public $shyrina;
    public $stek;
    public $profil;
    public $pov;
    public $sum;
    public $plosh;

    public function createWindow($vysota, $shyrina, $stek, $profil, $pov) {
        $this->vysota = $vysota;
        $this->shyrina = $shyrina;
        $this->stek = $stek;
        $this->profil = $profil;
        $this->pov = $pov;
    }

    public function place(){
        return $plosh = $this->vysota*$this->shyrina;
    }

    abstract public function summa();

}

class oknaPlast extends okna {
    function summa(){
        return $this->sum = $this->place()*$this->stek*100 + $this->profil*$this->place() +$this->pov;
    }
}

class oknaDerevo extends okna {
    function summa(){
        return $this->sum = $this->place()*$this->stek*100 + $this->profil*$this->place() +$this->pov*0.75;
    }
}
class oknaStal extends okna {
    function summa(){
        return $this->sum = $this->place()*$this->stek*100 + $this->profil*$this->place() +$this->pov*1.3;
    }
}

class class_okna_cal {

    function place($window){
        return $window->place();
    }
    function summa($window){
        return $window->summa();
    }

    function createArr($window){
        $arrWin=array(
            "vysota"=>$window->vysota,
            "shyrina"=>$window->shyrina,
            "stek"=>$window->stek,
            "profil"=>$window->profil,
            "povoroty"=>$window->pov,
            "stomost"=>$window->sum
        );
        return $arrWin;
    }

}