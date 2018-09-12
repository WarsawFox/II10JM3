<?php
class MojKalkulator {
    public $wynik;
    function __construct($a,$b) {
        $this->a=$a;
        $this->b=$b;
    }
    function dodaj() {
        return $this->a + $this->b;
    }
    function odejmij() {
        return $this->a - $this->b;
    }
    function pomnoz() {
        return $this->a * $this->b;
    }
    function podziel() {
        return $this->a / $this->b;
    }
}
 
$licz=new MojKalkulator(6,2);
 
echo $licz->dodaj()."</.br>";
echo $licz->odejmij()."</.br>";
echo $licz->pomnoz()."</.br>";
echo $licz->podziel()."</.br>";
?>