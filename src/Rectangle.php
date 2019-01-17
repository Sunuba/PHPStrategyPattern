<?php


namespace Sams;


class Rectangle implements Calculator {

    public function calculate($w, $h)
    {
        return $w*$h;
    }
}