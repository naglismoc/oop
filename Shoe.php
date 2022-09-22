<?php


class Shoe {
    public $id;
    public $manufacturer;
    public $color;
    public $size;
    public $material;
    

    function __construct($manufacturer = null, $color = null, $size = null, $material = null) {
        $this->manufacturer = $manufacturer;
        $this->color = $color;
        $this->size = $size;
        $this->material = $material;
    }

    public function description()
    {
        echo "<br>Cia description funkcijos rezultatas. Gamintojas - " . $this->manufacturer .  ", spalva - " . $this->color . 
        ", dydis - " . $this->size .  ", medziaga - " . $this->material. "<br>" ;
    }

    public function __toString()
    {
        return "<br>Cia toString funkcijos rezultatas. Gamintojas - " . $this->manufacturer .  ", spalva - " . $this->color . 
        ", dydis - " . $this->size .  ", medziaga - " . $this->material. "<br>" ;
    }

}