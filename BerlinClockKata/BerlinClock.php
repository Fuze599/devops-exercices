<?php

class BerlinClock {

    public $h;
    public $m;
    public $s;

    function __construct(){
        $currentTime = '20:23:00';
        $date = date($currentTime);
        $date = strtotime($date);


       $this->_h = date("H", $date);
       $this->_m = date("i", $date);
       $this->_s = date('s', $date);
    }

    public function count():string
    {
        return "";
    }

    public function ligneSimplesMinutes():int
    {
        return $this->_m % 5;
    }

    public function ligne5Minutes():int
    {
        $temp = this_m % 5;
        $temp = this_m - $temp;
        return $temp / 5;
    }

    public function ligneSimplesHeures():int
    {
        return $this->_h % 5;
    }

    public function ligne5Heures():int
    {
        $temp = this_h % 5;
        $temp = this_h - $temp;
        return $temp / 5;
    }

    public function lampeSecondes():int
    {
        return $this->_s % 2;
    }

    public function horloge():string
    {

        $horloge = "0 = lampe éteinte, 1 = lampe allumée\n\n";

        $secondes = $this->lampeSecondes();
        $ligne5heures = $this->ligne5Heures();
        $ligne1heure = $this->ligneSimplesHeures();
        $ligne5minutes = $this->ligne5Minutes();
        $ligne1mintes = $this->ligneSimplesMinutes();

        if($secondes == 0)
            $horloge = $horloge . "          1\n";
        else
            $horloge = $horloge . "          0\n";

        $horloge = $horloge . ' ';

        for($i=0; $i < 4; $i++){
            if($i < $ligne5heures)
                $horloge = $horloge . "1111 ";
            else
                $horloge = $horloge . "0000 ";
        }

        $horloge = $horloge . "\n ";

        for($i=0; $i < 4; $i++){
            if($i < $ligne1heure)
                $horloge = $horloge . "1111 ";
            else
                $horloge = $horloge . "0000 ";
        }

        $horloge = $horloge . "\n";

        for($i=0; $i < 11; $i++){
            if($i < $ligne5minutes)
                $horloge = $horloge . "1 ";
            else
                $horloge = $horloge . "0 ";
        }

        $horloge = $horloge . "\n ";

        for($i=0; $i < 4; $i++){
            if($i < $ligne1mintes)
                $horloge = $horloge . "1111 ";
            else
                $horloge = $horloge . "0000 ";
        }

        return $horloge;
    }
}
?>

<!---->
<!--[][][][][][][][][][][]-->
<!--[][][][][][][][][][][]-->
<!--[][][][][][][][][][][]-->
<!--[][][][][][][][][][][]-->
<!--[][][][][][][][][][][]-->
<!---->
<!--          1-->
<!-- 0000 1111 0000 1111-->
<!-- 0000 1111 0000 1111-->
<!--1 1 1 1 1 1 1 1 1 1 1-->
<!-- 0000 1111 0000 1111-->