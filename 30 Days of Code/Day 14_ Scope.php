<?php

class Difference
{
    public $maximumDifference;
    private $elements = [];

    public function __construct($a)
    {
        $this->elements = $a;
    }
    //começo do código no hacker rank
    public function ComputeDifference()
    {
        $count = count($this->elements);
        $sum = [];
        for ($i = 0; $i < $count; $i++) {
            for ($k = $i + 1; $k < $count; $k++) {
                if (isset($this->elements[$i]) && isset($this->elements[$k])) {
                    $sum[] = abs($this->elements[$i] - $this->elements[$k]);
                }
            }
        }

        $this->maximumDifference = max($sum);
    }
    //final do código
}

//End Difference class