<?php

class Car
{
    public $typ;
    public $hp;

    public function drive(){
        //var_dump($this->hp);//$this bezieht sich auf das spezifische Objekt
        var_dump("Ein {$this->typ} faehrt mit {$this->hp} PS");
        echo "<br/>";
    }
}

//----------------------------------------------------------------------------
$vw = new Car();
$vw ->typ = "VW";
$vw ->hp = 150;

$vw->drive();

//----------------------------------------------------------------------------
$porsche = new Car();
$porsche->typ = "Porsche";
$porsche ->hp = 300;

$porsche->drive();

//----------------------------------------------------------------------------
echo "<br/>";

var_dump($porsche);
?>