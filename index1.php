<?php
interface water
{
    public function makeItWet();
}


/**
 * abstract class implements water but defines makeItWet
 * in the most general way to allow child class to
 * provide specificity
 **/
abstract class weather implements water
{
    private $cloudy;
    public function makeItWet(){}
    abstract public function start();
    abstract public function getCloudy();
    abstract public function setCloudy();
}

class rain extends weather                            {
    private $cloudy;
    public function start() {
        return "Here's some weather. ";
    }

    public function makeItWet() {
        return 'it is raining cats and dogs today.';
    }
    public function getCloudy() {
        return $this->cloudy;
    }
    public function setCloudy($bln=false) {
        $this->cloudy = $bln;
    }
}

$a = new rain();
echo $a->start(); //Here's some weather.
$a->setCloudy(true);
if ($a->getCloudy()) {
    echo 'It is a cloudy day and ';
}
echo $a->makeItWet();